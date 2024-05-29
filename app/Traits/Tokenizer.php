<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

Trait Tokenizer{
    protected function tokenizerAuthenticate($request, $brandId): bool|string
    {
        try {
            $credentials = config('tokenizer.credentials');
            $credentials['brand_id'] = $brandId;
            $baseUrl = config('tokenizer.url');
            $urlAuthenticate =  $baseUrl . '/authenticate';
            $response = Http::post($urlAuthenticate, $credentials);
            if($response->status() === 200){
                if($response->body() === 'Access Denied'){
                    error_log($response->body());
                    return false;
                }else{
                    $jwt = $response->body();
                    error_log('Tokenizer authenticated: ' . $jwt);
                    return $jwt;
                }
            }
            return false;
        }catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function tokenizerExchangeForToken($request, $brandId, $data): bool|string
    {
        try {
            if(!empty($brandId) && !empty($data)) {

                // apply asymmetric encryption on data before flight, docker secrets contains public key (brand dependent)
                $publicKeyPath = '/run/secrets/' . $brandId . '_comms_public';
                $publicKey = file_get_contents($publicKeyPath);
                $chunks = str_split($data, 214); // max is 214
                $result = '';
                foreach($chunks as $d){
                    if(openssl_public_encrypt($d, $encrypted, $publicKey, OPENSSL_PKCS1_OAEP_PADDING)){
                        $result .= $encrypted;
                    }
                }
                $encrypted_base64 = base64_encode($result);

                // get the jwt token from the tokenizer
                $jwt = $this->tokenizerAuthenticate($request, $brandId);
                if(is_string($jwt)){
                    $baseUrl = config('tokenizer.url');
                    $bodyTokenize = [
                        'data' => $encrypted_base64,
                    ];

                    // exchange data for a token
                    $response = Http::withHeaders(['Authorization' => 'Bearer ' . $jwt ])->post($baseUrl, $bodyTokenize);
                    $token = $response->body();
                    if(is_string($token)){
                        return $token;
                    }else{
                        error_log("**** ERROR: tokenizer returned an unexpected response.");
                        error_log(print_r($token, true));
                    }
                }
            }
            return false;
        }catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function tokenizerExchangeForData($request, $brandId, $token): bool|string
    {
        try {
            if(!empty($brandId) && !empty($token)) {
                $jwt = $this->tokenizerAuthenticate($request, $brandId);
                if(is_string($jwt)){
                    $baseUrl = config('tokenizer.url');
                    $response = Http::withHeaders(['Authorization' => 'Bearer ' . $jwt ])->get($baseUrl . '/' . $token);
                    $encoded = $response->body();
                    if(is_string($encoded)){
                        if(!empty($encoded)) {
                            $privateKeyPath = '/run/secrets/' . $brandId . '_comms_private';
                            $privateKey = file_get_contents($privateKeyPath);
                            $data = base64_decode($encoded); //every strlen($encrypted) == 256
                            openssl_private_decrypt($data, $decrypted, $privateKey, OPENSSL_PKCS1_OAEP_PADDING);
                            if (empty($decrypted)) {
                                error_log("**** ERROR: Decryption error.");
                                return false;
                            }
                            return $decrypted;
                        }
                    }else{
                        error_log("**** ERROR: tokenizer returned an unexpected response when authenticating.");
                    }
                }
            }
            return false;
        }catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }
    public function tokenizerDeleteToken($request, $brandId, $token): bool
    {
        try {
            if(!empty($brandId) && !empty($token)) {
                $jwt = $this->tokenizerAuthenticate($request, $brandId);
                if(is_string($jwt)){
                    $baseUrl = config('tokenizer.url');
                    $response = Http::withHeaders(['Authorization' => 'Bearer ' . $jwt ])->delete($baseUrl . '/' . $token);
                    $token = $response->body();
                    if(is_string($token)){
                        if($token === 'OK'){
                            return true;
                        }else{
                            error_log($token);
                        }
                    }else{
                        error_log("**** ERROR: tokenizer returned an unexpected response.");
                        error_log(print_r($token, true));
                    }
                }
            }
            return false;
        }catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return false;
        }
    }

}