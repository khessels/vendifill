<?php
namespace App\Traits;
//use App\Http\Middleware\Authenticate;
use App\Jobs\ScriptJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;
use Carbon\Carbon;


trait V3Messaging {

    public int $EnvironmentExpiration = 120 ;
    private array $allowedTransports = ['stomp','amqp'];

    public function logError( $request, $payload, $event, $file, $function, $line ): bool
    {
        $message = $this->_createV3Message($request,'topic', strtoupper($event), 'logging', null, ['file' => $file, 'function' => $function, 'line' => $line, 'payload' => $payload]);
        if(!empty($message)) {
            $this->_publishV3Message($message);
            return true;
        }
        return false;
    }
    public function isResponseArray($array) {
        foreach($array as $key => $value){
            if(!is_array($value)){
                return false;
            }
        }
        return true;
    }
    public function isJson($string) {
        if(is_string($string)){
            $string = ltrim($string);
            if(strlen($string) > 0){
                if(substr($string, 0,1) === '{' || substr($string, 0,2) === '[{'){
                    json_decode($string);
                    return json_last_error() === JSON_ERROR_NONE;
                }
            }
        }
        return false;
    }
    public function event( $request, $event, $payload = null ): bool
    {
        $message = $this->_createV3Message($request,'topic', strtoupper($event),  'logging', null, $payload);
        if(!empty($message)) {
            $this->_publishV3Message($message);
            return true;
        }
        return false;
    }

    public function critical( $request, $event, $payload = null): bool
    {
        $message = $this->_createV3Message($request,'topic', strtoupper($event),'logging', null, $payload);
        if(!empty($message)) {
            $this->_publishV3Message($message);
            return true;
        }
        return false;
    }

    public function criticalException( $request, $e, $file, $function, $line, $payload = null  ): bool
    {
        $data['message'] = $e->getMessage();
        error_log("===================");
        error_log("Critical Exception: ");
        if(!empty($payload)){
            $data['payload'] = $payload;
            if(is_string($payload)){
                error_log("payload: " . $payload);
            }else if(is_array($payload) || is_object($payload)){
                error_log("payload:");
                error_log(print_r( $payload, true));
            }
        }
        error_log($e->getMessage() );
        if(!empty($request)) {
            error_log("Has request: YES");
            if (!empty($request->hasHeader('x-feature-id'))) {
                $data['feature_id'] = $request->header('x-feature-id');
                error_log("featureId: " . $request->header('x-feature-id'));
            }
            if (!empty($request->all())) {
                $data['request_parms'] = $request->all();
            }
        }else{
            error_log("Has request: NO");
        }
        error_log("-------------------");
        error_log("file: " . $file);
        error_log('function: ' . $function );
        error_log('line: ' . $line);
        error_log("===================");

        $message = $this->_createV3Message($request,'topic', 'critical exception',  'logging', null, $data);
        if(!empty($message)) {
            $this->_publishV3Message($message);
            return true;
        }
        return false;
    }
    public function decodeV3Payload($oPayload = null, $returnArray = false)
    {
        if(empty($oPayload)){
            return null;
        }
        $oPayload = (array) $oPayload;
        if(empty($oPayload['encoding']) ){
            return $oPayload;
        }
        switch(strtolower($oPayload['encoding'])){
            case 'base64':
                $payload = base64_decode($oPayload['data']);
                break;
            default:
                $payload = $oPayload['data'];
                break;
        }
        switch(strtolower($oPayload['type'])){
            case 'object':
                // $payload = json_decode($payload);
                // break;
            case 'array':
                $payload = json_decode($payload, true);
                break;
            case 'boolean':
                $payload =  !! $payload;
                break;
            case 'numeric':
                $payload = (int) $payload;
                break;
            case 'double':
                $payload = (double) $payload;
                break;
            case 'null':
                $payload = null;
                break;
            case 'string':
            default:
                break;
        }
        if($returnArray){
            return $payload;
        }
        return (array) $payload;
    }
    public function decodeV3Message($V3Message){
        if(!empty($V3Message['payload'])){
            $V3Message['payload'] = $this->decodeV3Payload($V3Message['payload']);
        }
        if(!empty($V3Message['forward'])){
            if(!empty($V3Message['forward']['payload'])){
                $V3Message['forward']['payload'] = $this->decodeV3Payload($V3Message['forward']['payload']);
            }
        }
        return $V3Message;
    }
    public function _createV3Payload($payload, &$payloadType, &$payloadEncoding): ?string
    {
        $ret = null;
        if ($this->isJson($payload)) {
            $payloadType = "object";
            $payloadEncoding = 'base64';
            $ret = base64_encode($payload);
        } else {
            $type = gettype($payload);
            switch( $type ){
                case 'boolean':
                    $payloadType = "boolean";
                    $payloadEncoding = 'base64';
                    $ret = base64_encode((string) $payload);
                    break;
                case 'integer':
                    $payloadType = "numeric";
                    $ret = base64_encode((string) $payload);
                    break;
                case 'double':
                    $payloadType = "double";
                    $ret = base64_encode((string) $payload);
                    break;
                case 'string':
                    $payloadType = "string";
                    $ret = base64_encode($payload);
                    break;
                case 'array':
                    $payloadType = "array";
                    $ret = base64_encode(json_encode($payload));
                    break;
                case 'object':
                    $payloadType = "object";
                    $ret = base64_encode(json_encode($payload));
                    break;
                case 'null':
                    $payloadType = "null";
                    $ret = "null";
                    break;
            }
        }
        return $ret;
    }

    public function _createV3Message($request = null, $method = null, $event = null, $destination = null, $endpoint = null, $payload = null, $headers = null, $transport = null, $brandId = null): bool|array
    {
        try {
            $payloadType        = "string";
            $payloadEncoding    = 'base64';
            $obj                = [];
            $obj['version']     = 3;
            $obj['method']      = 'topic';
            if(! empty($method)) {
                $obj['method'] = $method;
            }
            if(empty($transport)){
                $transport = 'stomp';
            }
            $obj['transport']   = in_array($transport,$this->allowedTransports) ? $transport : 'stomp';
            if(empty($brandId)){
                $userBrandId = config('app.brand_id');
                if(!empty(Auth::id())){
                    $userBrandId = isset(Auth::user()['brand_id']) ? Auth::user()['brand_id']: $userBrandId;
                }
                $brandId = $userBrandId;
            }
            if(empty($brandId)){
                die("V3Message without brand_id");
            }
            $obj['brand_id']    = $brandId;

            if($event === false){
                $event = null;
            }
            if (!empty($event)) {
                $obj['event'] = $event;
            }
            $newHeaders = [];
            if (!empty($headers)) {
                foreach($headers as $key => $header){
                    $newHeaders[$key] = $header;
                }
            }

            // get all custom headers from the request and pass them on
            if(!empty($request)) {
                $header = $request->header();
                foreach($header as $key => $value){
                    if(str_starts_with(strtoupper($key), 'X-')){
                        $newHeaders[$key] = $value[0];
                    }
                }
            }
            if(sizeof($newHeaders) > 0){
                $obj['headers'] = $newHeaders;
            }
            if (!empty($destination)) {
                if (strtolower($destination) === 'user') {
                    if (!empty($payload)) {
                        if (!empty($payload['user_id'])) {
                            $obj['destination'] = 'user.' . $payload['user_id'];
                        }
                    }
                }else{
                    $obj['destination'] = $destination;
                }
            }
            if (!empty($endpoint)) {
                $obj['endpoint'] = $endpoint;
            }
            if (!empty($payload)) {
                $encodedPayload = $this->_createV3Payload($payload, $payloadType, $payloadEncoding);
                if (!empty($encodedPayload)) {
                    $obj['payload']['encoding'] = $payloadEncoding;
                    $obj['payload']['type'] = $payloadType;
                    $obj['payload']['data'] = $encodedPayload;
                }
            }
            return $obj;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function isFeature($message){
        if(!empty($message['event'])){
            if(strpos($message['event'], 'feature')>=0){
                return true;
            }
        }
        return false;
    }
    public function _publishV3Message($message):bool
    {
        try {
            // convert the message to an array (recursive)
            if(is_object($message) ){
                $message = $this->objectToArray($message);
            }
            if($this->isJson($message)){
                $message = json_decode($message, true);
            }
            // sometimes the user id will not be specified in the destination. in this case we have to
            //   look in the payload for a user_id and update the destination accordingly this happens with signal actions for example
            if(!empty($message)) {
                if (is_array($message)) {
                    $message = $this->_setDefaultMessageHeaders($message);
                    $client = Redis::connection()->client();
                    if ($client->isConnected()) {
                        $address = 'PUBLISH-EVENT-' . env('APP_API_BRIDGE_NAME');
                        if( $this->getHeaderValueBoolFromV3($message,'x-v3message-log', false)) {
                            // we don't want to log feature messages
                            if( ! $this->isFeature($message)) {
                                error_log('**************************** V3Message ');
                                error_log(print_r($message, true));
                                error_log('**************************** END V3Message ');
                            }
                        }
                        Redis::publish($address, json_encode($message));
                        return true;
                    }
                    error_log("Unable to publish V3Message (3)");
                } else {
                    error_log("Unable to publish V3Message (4)");
                }
                return false;
            }
            error_log("Unable to publish V3Message (5)");
            return false;
        }catch(\Exception $e){
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function _constructV3($request, $parms): bool|array
    {
        try{
            $method = empty($parms['method']) ? null : $parms['method'];
            $event = empty($parms['event']) ? null : $parms['event'];
            $destination = empty($parms['destination']) ? null : $parms['destination'];
            $endpoint = empty($parms['endpoint']) ? null : $parms['endpoint'];
            $payload = empty($parms['payload']) ? null : $parms['payload'];
            $headers = empty($parms['headers']) ? null : $parms['headers'];
            $transport = empty($parms['transport']) ? null : $parms['transport'];
            $brandId = empty($parms['brand_id']) ? null : $parms['brand_id'];
            $message = $this->_createV3Message($request, $method, $event, $destination, $endpoint, $payload, $headers, $transport, $brandId);
            if (!empty($parms['forward'])) {
                $method = empty($parms['forward']['method']) ? null : $parms['forward']['method'];
                $event = empty($parms['forward']['event']) ? null : $parms['forward']['event'];
                $destination = empty($parms['forward']['destination']) ? null : $parms['forward']['destination'];
                $endpoint = empty($parms['forward']['endpoint']) ? null : $parms['forward']['endpoint'];
                $payload = empty($parms['forward']['payload']) ? null : $parms['forward']['payload'];
                $headers = empty($parms['forward']['headers']) ? null : $parms['forward']['headers'];
                $transport = empty($parms['forward']['transport']) ? null : $parms['forward']['transport'];
                $brandId = empty($parms['brand_id']) ? null : $parms['brand_id'];
                $message['forward'] = $this->_createV3Message($request, $method, $event, $destination, $endpoint, $payload, $headers, $transport, $brandId);
            }
            return $message;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function storeAction(Request $request, $messageObject, $uuidEnvironment): bool | array
    {
        try{
            if(!empty($messageObject['id'])){
                Redis::set($uuidEnvironment.".action.".$messageObject['id'], json_encode($messageObject, true), 'EX', $this->EnvironmentExpiration);
                return $messageObject;
            }
            return false;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function getEnvironmentKeys(Request $request, $EnvironmentUUID): bool|array
    {
        try{
            $keys = Redis::get($EnvironmentUUID . '.keys');
            if(empty( $keys )){
                return [];
            }
            return json_decode($keys, true);
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function exchangeKeysInString($EnvironmentUUID, $haystack, $keys){
        try{
            foreach($keys as $key) {
                $value = Redis::get($EnvironmentUUID . "." . $key);
                $needle = '<' . $key . '>';
                if (strpos($haystack, $needle) !== false) {
                    $haystack = str_ireplace($needle, (string)$value, $haystack);
                }
            }
            return $haystack;
        }catch(\Exception $e){
            $this->criticalException(false, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function _replaceNowTags(Request $request, $json): array|bool|string
    {
        try{
            $json = str_ireplace('<now>', Carbon::now()->toDateTimeString(), $json);
            while(str_contains($json, '<now:')){
                // get the start position
                $start = strpos($json,"<now:");
                // get the end position ('>')
                $end = strpos($json, '>', $start);
                $string = substr($json, $start, (($end +1) - $start));
                // get the numeric part out of the string
                preg_match_all('/[0-9]+/', $string, $matches);
                $value = $matches[0][0];
                $date = Carbon::now();
                $date->addHours((int) $value);
                $json = str_ireplace($string, $date->toDateTimeString(), $json);
            }
            return $json;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function exchangeKeysInMessage(Request $request, $EnvironmentUUID, $messageObject, $keys, $prepend = false): bool|array
    {
        try{
            if(!empty($keys)){
                // encode message into json string
                $json = json_encode($messageObject);
                $json = $this->_replaceNowTags($request, $json);
                // search and replace Environment variables
                foreach($keys as $key){
                    $value = Redis::get($EnvironmentUUID."." . $key);
                    if($this->isJson($value)){
                        $dataArray = json_decode($value, true);
                        foreach($dataArray as $_key => $dataItem){
                            foreach($dataItem as $__key => $_item){
                                $needle='<' . $key . '.' . $_key . '.' . $__key . '>';
                                if(strpos($json, $needle) !== false) {
                                    $json = str_ireplace($needle, (string) $_item, $json);
                                }
                            }
                        }
                    }else{
                        $json = str_ireplace('<'.$key.'>', $value, $json);
                    }
                }
                $messageObject = json_decode($json, true);
            }
            return $messageObject;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function getActionById(Request $request, $uuidEnvironment, $actionId): bool|array
    {
        try{
            $action = Redis::get($uuidEnvironment.".action." . $actionId);
            if(!empty($action)){
                return json_decode($action, true);
            }
            return false;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    protected function addKeypairToEnvironment(Request $request, $EnvironmentUUID, $key, $value, $force = false): bool
    {
        // when a response from an endpoint is stored we want to overwrite any previous values
        try{
            $keys =$this->getEnvironmentKeys($request, $EnvironmentUUID);
            if(!in_array($key, $keys) || $force){
                Redis::set($EnvironmentUUID . '.' . $key, $value, 'EX', $this->EnvironmentExpiration);
                $keys = Redis::get($EnvironmentUUID . '.keys');
                if(empty( $keys )){
                    $keys = [];
                }else{
                    $keys = json_decode($keys, true);
                }
                $keys[] = $key;
                Redis::set($EnvironmentUUID . '.keys', json_encode($keys), 'EX', $this->EnvironmentExpiration);
            }else{
                $s = '';
            }
            return true;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function executeValidation(Request $request, $action, $keys, $EnvironmentUUID): bool
    {
        try{
            if(!empty($action['validation'])) {
                $request->validate($action['validation']);
            }
            if(isset($action['status'])) {
                if($request->hasHeader('x-status')){
                    $xStatus = $request->header('x-status');
                    if (!in_array($xStatus, $action['status'])) {
                        return false;
                    }
                }
            }
            return true;
        }catch(\Exception $e){
            return false;
        }
    }

    private function createEnvironment(Request $request, $overrideUUID = null): bool|string|null
    {
        try{
            $uuidEnvironment = uuid_create();
            if(!empty($overrideUUID)) {
                $uuidEnvironment = $overrideUUID;
            }
            return $uuidEnvironment;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function getFromProperties($properties, $needle = 'prepend', $default = ''){
        try{
            foreach ($properties as $key => $value) {
                if($value['key'] === $needle){
                    return $value['value'];
                }
            }
            return $default;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function exchangeKeysInMessageUsingProperties($request, $properties, $message){
        try{
            $json = json_encode($message);
            $modified = false;
            foreach($properties as $kv){
                $needle = '<' . $kv['key'] . '>';
                if(str_contains($json, $needle)) {
                    if($this->isJson($kv['value'])){
                        $kv['value'] = json_decode($kv['value'], true);
                        $jArray = json_decode($json, true);
                        foreach ($jArray as $key => $value) {
                            if($value === $needle){
                                $jArray[$key] = $kv['value'];
                            }else{
                                if(is_array($value)) {
                                    foreach ($value as $_key => $_value) {
                                        if( $_value === $needle){
                                            $jArray[$key][$_key] = $kv['value'];
                                        }else{
                                            if(is_array($_value)) {
                                                foreach ($_value as $__key => $__value) {
                                                    if( $__value === $needle){
                                                        $jArray[$key][$_key][$__key] = $kv['value'];
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        $json = json_encode($jArray);
                    }else{
                        $json = str_ireplace($needle, (string) $kv['value'], $json);
                        $modified = true;
                    }
                }
            }
            $s = json_decode($json, true);
            return $modified ? json_decode($json, true) : $message;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function getHeaderValueBoolFromRequest($request, $needle = 'x-v3message-log', $default = false){
        if($request->hasHeader($needle)){
            return (boolean) $request->header($needle);
        }
        return $default;
    }
    public function getHeaderValueBoolFromV3($message, $needle = 'x-v3message-log', $default = false){
        if(!empty($message['headers'])){
            $keys = array_keys($message['headers']);
            if(in_array($needle, $keys)){
                return (bool) $message['headers'][$needle];
            }
        }
        return $default;
    }
    public function process(Request $request): bool|\Illuminate\Http\JsonResponse
    {
        try{
            error_log("*********** processing **********");
            $s = $request->all();
            $prepend = "";
            if($request->hasHeader('x-prepend')){
                $prepend = $request->header('x-prepend');
            }
            if($request->hasHeader('x-v3message-log')){
                $h='';
            }
            if($request->hasHeader('x-pass-through')){
                $data = $request->header('x-pass-through');
                $passThrough = $data;
                if($request->hasHeader('x-pass-through-format')) {
                    switch (strtoupper($request->header('x-pass-through-format'))) {
                        case 'JSON':
                            $passThrough = json_decode($data, true);
                            break;
                        case 'V3PAYLOAD':
                            $data = json_decode($data);
                            $passThrough = $this->decodeV3Payload($data, true);
                            break;
                    }
                }
                if(!empty($passThrough['environment_id'])){
                    $uuidEnvironment = $passThrough['environment_id'];
                }
                if(!empty($passThrough['action_ids'])){
                    $action_ids = $passThrough['action_ids'];
                }
                if(!empty($action_ids)) {
                    foreach ($action_ids as $action_id) {
                        $action = $this->getActionById($request, $uuidEnvironment, $action_id);
                        if (!empty($action)) {
                            switch ($action['action']) {
                                case 'store':
                                    // if the response is an array of items, then store the array in its whole
                                    if($this->isResponseArray($s)){
                                        $this->addKeypairToEnvironment($request, $uuidEnvironment, $prepend, json_encode( $s ), true );
                                    }else{
                                        if ($action['return.body.attribute'] === "*") {
                                            foreach ($s as $key => $val) {
                                                $this->addKeypairToEnvironment($request, $uuidEnvironment, $prepend . '.' . $key, $val, true);
                                            }
                                        } else {
                                            $this->addKeypairToEnvironment($request, $uuidEnvironment, $prepend . '.' . $action['key'], $request->{$action['return.body.attribute']}, true);
                                        }
                                    }
                                    break;
                                case 'event-validation':
                                    // send an object to the bridge. and let the bridge handle the subscription, no receive timeout, etc..
                                    $signalValidation = [
                                        'method'            => $action['method'],
                                        'event'             => $action['event'],
                                        'required_fields'   => $action['requires'],
                                        'uuidEnvironment'   => $uuidEnvironment,
                                        'timeout'           => 10,
                                        'on_success'        => json_encode([]),
                                        'on_timeout'        => json_encode([])];
                                    $client = Redis::connection()->client();
                                    if ($client->isConnected()) {
                                        $address = 'PUBLISH-SIGNAL-VALIDATION-' . env('APP_API_BRIDGE_NAME');
                                        if( $request->hasHeader('x-v3message-log')) {
                                            // we don't want to log feature messages
                                            error_log('**************************** signalValidation ');
                                            error_log(print_r($signalValidation, true));
                                            error_log('**************************** END signalValidation ');
                                        }
                                        Redis::publish($address, json_encode($signalValidation));
                                    }
                                    break;
                                case 'validate':
                                    $keys = $this->getEnvironmentKeys($request, $uuidEnvironment);
                                    $result = $this->executeValidation($request, $action, $keys, $uuidEnvironment);
                                    $message = $result ? $action['on_success'] : $action['on_fail'];
                                    $message = $this->exchangeKeysInMessage($request, $uuidEnvironment, $message, $keys);
                                    $message = $this->_constructV3($request, $message);
                                    $this->_publishV3Message( $message );
                                    break;
                            }
                        }
                    }
                    // execute the next script.
                    ScriptJob::dispatch($uuidEnvironment);
                }else{
                    error_log("*** No action_ids specified in script ?");
                    error_log(print_r($s, true));
                }
            }
            return response()->json($this->responseObject($request, true, $s) );
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }

    public function _publishV3Event($request, $version = 3, $overrideUUID = false, $properties = false, $groupUUID = null): bool
    {
        try{
            $parms = $request->all();
            if(empty($parms['messages'])) {
                // we received a regular message
                $message = $this->_constructV3($request, $parms);
                $ret = $this->_publishV3Message($message);
                if($ret){
                    return true;
                }
            }else{ // this array can contain "messages" as well as "actions"
                // create an "environment" to store variables etc... (an Environment holds variables etc...)
                $uuidEnvironment = $this->createEnvironment($request, $overrideUUID);
                $this->addKeypairToEnvironment($request, $uuidEnvironment,'environment_id', $uuidEnvironment);
                $this->addKeypairToEnvironment($request, $uuidEnvironment,'group_id', $groupUUID);
                $delayedExecution = false;
                foreach($parms['messages'] as $messageObject){
                    // BELOW is for debugging purposes only, remove when done
                    if( empty( $messageObject['action'] ) ) {
                        $m = $this->_constructV3($request, $messageObject);
                        // for debugging
                        if($this->getHeaderValueBoolFromV3($m, 'x-v3message-log', false)){
                            $s = '';
                        }
                    }

                    // change variables in message with variables found in properties
                    $messageObject = $this->exchangeKeysInMessageUsingProperties($request, $properties, $messageObject);

                    // get all keys that are stored in the Environment
                    $keys = $this->getEnvironmentKeys($request, $uuidEnvironment);
                    $prepend = $this->getFromProperties($properties, 'prepend');

                    // execute below function two times to make sure nested variables will be processed
                    $messageObject = $this->exchangeKeysInMessage($request, $uuidEnvironment, $messageObject, $keys, $prepend);
                    $messageObject = $this->exchangeKeysInMessage($request, $uuidEnvironment, $messageObject, $keys, $prepend);

                    if( empty( $messageObject['action'] ) ){  // this is a message
                        // create and send message if there is a prepend, then add it to the forward headers as x-prepend
                        $message = $this->_constructV3($request, $messageObject);
                        $prepend = $this->getFromProperties($properties, 'prepend', false);
                        if ($prepend !== false){
                            if(!empty($message['forward'])){
                                if(empty($message['forward']['headers'])){
                                    $message['forward']['headers'] = [];
                                }
                                $message['forward']['headers']['x-prepend'] = $prepend;
                            }
                        }
                        $this->_publishV3Message($message);
                        if(!empty($message['forward']['endpoint']['uri'])) {
                            if ($message['forward']['endpoint']['uri'] === '/developer/message/process') {
                                $delayedExecution = true;
                            }
                        }
                    }else{ // this is an action object
                        if(!empty($properties) && $messageObject['action'] !== 'set'){
                            foreach ($properties as $key => $value) {
                                $this->addKeypairToEnvironment($request, $uuidEnvironment, $value['key'], $value['value']);
                            }
                        }

                        switch(strtolower($messageObject['action'])){
                            case "set":
                                if(!empty($properties)){
                                    foreach($properties as $property) {
                                        $this->addKeypairToEnvironment($request, $uuidEnvironment, $property['key'], $property['value']);
                                        if ($property['key'] === 'EnvironmentExpiration') {
                                            $this->{$messageObject['key']} = $messageObject['value'];
                                        }
                                    }
                                }
                                break;
                            case "environment.set":
                                $this->addKeypairToEnvironment($request, $uuidEnvironment, $messageObject['key'], $messageObject['value']);
                                break;
                            case "wait":
                                error_log("*** Waiting for " . $messageObject['value'] . " seconds before continuing ***");
                                sleep($messageObject['value']);
                                break;
                            default:
                                //$messageObject  = $this->exchangeKeysInMessage($request, $uuidEnvironment, $messageObject, $keys);
                                $this->storeAction($request, $messageObject, $uuidEnvironment);
                                break;
                        }
                    }
                }
                if( ! $delayedExecution){
                    // we are not waiting for the results of this script to be processed, execute new job
                    ScriptJob::dispatch($uuidEnvironment);
                }
            }
            return true;
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    private function objectToArray($obj) {
        //only process if it's an object or array being passed to the function
        if(is_object($obj) || is_array($obj)) {
            $ret = (array) $obj;
            foreach($ret as &$item) {
                //recursively process EACH element regardless of type
                $item = $this->objectToArray($item);
            }
            return $ret;
        }
        //otherwise (i.e. for scalar values) return without modification
        else {
            return $obj;
        }
    }

    private function _setDefaultMessageHeaders($message) {
        if($this->getHeaderValueBoolFromV3($message, 'x-v3message-log', false)){
            $s = ''; // for debug only
        }
        $messageHeaders = empty($message['headers'])? [] : $message['headers'];
        $messageHeaderKeys = array_keys($messageHeaders);

        $defaultHeaders = config('app.headers');
        $defaultHeaderKeys = array_keys($defaultHeaders);
        $merged = [];
        foreach ($defaultHeaderKeys as $dKey){
            $found = false;
            foreach($messageHeaderKeys as $mKey){
                if (strtolower($mKey) === strtolower($dKey)){
                    $found = true;
                }
            }
            if(!$found){
                $merged[$dKey] = $defaultHeaders[$dKey];
            }
        }

        foreach($merged as $key => $val) {
            $message['headers'][$key] = $val;
        }
        return $message;
    }
}
