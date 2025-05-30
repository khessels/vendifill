<?php

namespace App\Http\Controllers;
use App\Models\CreditCard;
use App\Traits\Tokenizer;
use App\Traits\V3Messaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class APIController extends Controller
{
    use V3Messaging, Tokenizer;

    /**
     * @OA\Post(
     *     path="/api/brand-api/creditcard",
     *     tags={"creditcard"},
     *     security={{"bearerAuth":{}}},
     *     description="Add a credit card OR a token (in either cc_number or cc_token field). (if token set card to provider i.e. card=spreedly",
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="user_id",
     *                      type="integer"
     *                  ),
     *                  @OA\Property(
     *                      property="cc_name",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                      property="cc_month",
     *                      type="integer"
     *                  ),
     *                  @OA\Property(
     *                      property="cc_year",
     *                      type="integer"
     *                  ),
     *                  @OA\Property(
     *                      property="cc_number",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                       property="cc_token",
     *                       type="string"
     *                   ),
     *                   @OA\Property(
     *                        property="card",
     *                        type="string"
     *                    ),
     *                  @OA\Property(
     *                      property="cc_ccv",
     *                      type="integer"
     *                  ),
     *                  @OA\Property(
     *                       property="run_mode",
     *                       type="string"
     *                   ),
     *                  @OA\Property(
     *                       property="country_code",
     *                       type="string"
     *                   ),
     *              )
     *          )
     *     ),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function isCC($ccNumber): bool
    {
        if (preg_match("/^\d{4} \d{4} \d{4} \d{4}$/", $ccNumber)) {
            return true;
        }
        if (preg_match("/^\d{4}-\d{4}-\d{4}-\d{4}$/", $ccNumber)) {
            return true;
        }
        if (preg_match("/^\d{16}$/", $ccNumber)) {
            return true;
        }
        return false;
    }
    public function normalizeCC($ccNumber){
        // todo, normalize cc number string to 4-4-4-4
        $ccStringVal = (string) preg_replace('/[^0-9]/', '', $ccNumber);
        if(strlen($ccStringVal) != 16){
            return false;
        }
        $ccPieces = str_split($ccStringVal, 4);
        return implode('-', $ccPieces);
    }
    public function addCC(Request $request, $runMode = 'PRODUCTION')
    {
        $all        = $request->all();
        $cc_mask    = null;
        $brandId    = config('app.brand_id');
        $name       = empty($request->cc_name) ? $request->name : $request->cc_name;
        $month      = empty($request->cc_month) ? $request->month : $request->cc_month;
        $year       = empty($request->cc_year) ? $request->year : $request->cc_year;
        $ccv        = empty($request->cc_ccv) ? $request->ccv : $request->cc_ccv;
        $cc_card    = empty($request->cc_card) ? $request->card : $request->cc_card;
        $pan        = empty($request->cc_number) ? $request->cc : $request->cc_number;

        if(empty($cc_card)) {
            return response()->json([
                'success' => (int)false,
                'errors' => ['Card not specified.']
            ]);
        }

        if(!empty($pan)){
            if( $this->isCC($pan)){
                $cc_mask    = 'xxxx-xxxx-xxxx-' . substr($pan, -4);
                $cc_number  = $this->normalizeCC($pan);
                if(empty($cc_number)){
                    return response()->json([
                        'success' => (int)false,
                        'errors' => ['Error in cc_number.']
                    ]);
                }
            }else{
                $cc_mask    = 'xxxx-xxxx-xxxx-' . substr($pan, -4);
            }
        }

        if($request->hasHeader('x-run-mode')){
            $runMode = $request->header('x-run-mode');
        }
        if(!empty($request->run_mode)){
            $runMode = $request->run_mode;
        }

        $cc             = new CreditCard();
        $cc->brand_id   = $brandId;
        $cc->cc_name    = Crypt::encrypt($name);
        $cc->cc_month   = $month;
        if(strLen($month) == 1) {
            $cc->cc_month = '0' . $month;
        }
        $cc->cc_month   = Crypt::encrypt( strval($cc->cc_month));
        if(strLen($year)==2) {
            $cc->cc_year = $year;
        }elseif(strLen($year)==4){
            $cc->cc_year = substr($year,2,2);
        }else{
            return response()->json([
                'success' => (int)false,
                'errors' => ['Invalid year format.']
            ]);
        }
        $cc->cc_year = Crypt::encrypt (strval($cc->cc_year));
        $token = $this->tokenizerExchangeForToken($request, $brandId, $cc_number);
        if($token){
            $cc->cc_ccv     = Crypt::encrypt($ccv);
            $cc->cc_number  = $token;
            $cc->cc_mask    = Crypt::encrypt($cc_mask);
            $cc->card       = Crypt::encrypt(strtoupper($cc_card));
            $cc->run_mode   = $runMode;
            $cc->save();
            $arr            = $this->getPublicCCDetails($cc,null, $token, $cc_card);
            return response()->json( $arr);
        }
        return response( "Failed", 400);
    }
    protected function getPublicCCDetails($cc, $default, string $token, string $card = null): bool|array
    {
        try{
            $arr = [];
            $arr['cc_name']         = Crypt::decrypt( $cc['cc_name']);
            $arr['cc_number']       = Crypt::decrypt($cc['cc_mask']);
            if(!empty($card)){
                $arr['card']         = $card;
            }else{
                $arr['card']         = Crypt::decrypt($cc['card']);
            }

            $arr['cc_token']        = $token;
            if($default !== null) {
                $arr['default'] = (bool) $default;
            }
            return $arr;
        }catch(\Exception $e){
            error_log($e->getMessage());
            return false;
        }
    }
    /**
     * @OA\Get(
     *     path="/api/brand-api/creditcard/{token}",
     *     tags={"Customer"},
     *     security={{"bearerAuth":{}}},
     *     description="Get credit card assigned to user specified by token",
     *     @OA\Parameter(ref="#/components/parameters/token"),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function getCC(Request $request, $token)
    {
        $cc = CreditCard::where('cc_number', '=', $token)->where('brand_id','=', config('app.brand_id')  )->first();
        if(!empty($cc)) {
            $data = $this->tokenizerExchangeForData($request, Auth::user()['brand_id'], $token);
            $cc->cc_number = $data;
            if (!empty($cc)) {
                $publicCCDetails = $this->getPublicCCDetails($cc, null, $token);
                if (!empty($publicCCDetails)) {
                    return response()->json( $publicCCDetails);
                }
            }
        }
        return response();
    }

    /**
     * @OA\Delete(
     *     path="/api/brand-api/creditcard/{token}",
     *     tags={"Customer"},
     *     security={{"bearerAuth":{}}},
     *     description="Delete credit card assigned to user specified by token",
     *     @OA\Parameter(ref="#/components/parameters/token"),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function deleteCC(Request $request, $token)
    {
        $cc = CreditCard::where('cc_number', '=', $token)->where('brand_id','=', Auth::user()->brand_id)->first();
        $result = $this->tokenizerDeleteToken($request, Auth::user()->brand_id, $token);

        if(!empty($cc) && $result) {
            CreditCard::destroy($cc['id']);
        }
        return response();
    }

    /**
     * @OA\Delete(
     *     path="/api/brand-api/user/data/{token}",
     *     tags={"Customer"},
     *     security={{"bearerAuth":{}}},
     *     description="Delete custom string assigned to user specified by token",
     *     @OA\Parameter(ref="#/components/parameters/token"),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function deleteUserData(Request $request, $token)
    {
        $result = $this->tokenizerDeleteToken($request, Auth::user()['brand_id'], $token);
        if($result){
            return response();
        }
        return response( "Failed", 400);
    }

    /**
     * @OA\Get(
     *     path="/api/brand-api/creditcard/{token}",
     *     tags={"Customer"},
     *     security={{"bearerAuth":{}}},
     *     description="Exchange a token for a string",
     *     @OA\Parameter(ref="#/components/parameters/token"),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function getUserData(Request $request, $token, $key = null): \Illuminate\Http\JsonResponse
    {
            $data = $this->tokenizerExchangeForData($request, Auth::user()['brand_id'], $token);
            return response()->json( $data);
    }

    /**
     * @OA\Post(
     *     path="/api/brand-api/user/data",
     *     tags={"creditcard"},
     *     security={{"bearerAuth":{}}},
     *     description="Exchange a string for a token max 100 chars (ascii) or 50 utf-8",
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="data",
     *                      type="string"
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(response="500", description="error", ),
     *     @OA\Response(response="203", description="unprocessable"),
     *     @OA\Response(response="200", description="success"),
     * )
     */
    public function setUserData(Request $request)
    {
        $encodings = [
            "ASCII"
        ];
        $maxChars = 50;
        if(mb_detect_encoding($request->data, $encodings)){
            $maxChars = 100;
        }
        if(strlen($request->data) > $maxChars){
            return response( "max string length: " . $maxChars . " characters", 400);
        }
        $token = $this->tokenizerExchangeForToken($request, Auth::user()['brand_id'], $request->data);
        return response( $token);
    }

    protected function getCardBrand($pan, $include_sub_types = false): string
    {
        //maximum length is not fixed now, there are growing number of CCs has more numbers in length, limiting can give false negatives atm
        //these regexps accept not whole cc numbers too
        //visa
        $visa_regex = "/^4[0-9]{0,}$/";
        $vpreca_regex = "/^428485[0-9]{0,}$/";
        $postepay_regex = "/^(402360|402361|403035|417631|529948){0,}$/";
        $cartasi_regex = "/^(432917|432930|453998)[0-9]{0,}$/";
        $entropay_regex = "/^(406742|410162|431380|459061|533844|522093)[0-9]{0,}$/";
        $o2money_regex = "/^(422793|475743)[0-9]{0,}$/";

        // MasterCard
        $mastercard_regex = "/^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[01]|2720)[0-9]{0,}$/";
        $maestro_regex = "/^(5[06789]|6)[0-9]{0,}$/";
        $kukuruza_regex = "/^525477[0-9]{0,}$/";
        $yunacard_regex = "/^541275[0-9]{0,}$/";

        // American Express
        $amex_regex = "/^3[47][0-9]{0,}$/";

        // Diners Club
        $diners_regex = "/^3(?:0[0-59]{1}|[689])[0-9]{0,}$/";

        //Discover
        $discover_regex = "/^(6011|65|64[4-9]|62212[6-9]|6221[3-9]|622[2-8]|6229[01]|62292[0-5])[0-9]{0,}$/";

        //JCB
        $jcb_regex = "/^(?:2131|1800|35)[0-9]{0,}$/";

        //ordering matter in detection, otherwise can give false results in rare cases
        if (preg_match($jcb_regex, $pan)) {
            return "jcb";
        }

        if (preg_match($amex_regex, $pan)) {
            return "amex";
        }

        if (preg_match($diners_regex, $pan)) {
            return "diners_club";
        }

        //sub visa/mastercard cards
        if ($include_sub_types) {
            if (preg_match($vpreca_regex, $pan)) {
                return "v-preca";
            }
            if (preg_match($postepay_regex, $pan)) {
                return "postepay";
            }
            if (preg_match($cartasi_regex, $pan)) {
                return "cartasi";
            }
            if (preg_match($entropay_regex, $pan)) {
                return "entropay";
            }
            if (preg_match($o2money_regex, $pan)) {
                return "o2money";
            }
            if (preg_match($kukuruza_regex, $pan)) {
                return "kukuruza";
            }
            if (preg_match($yunacard_regex, $pan)) {
                return "yunacard";
            }
        }

        if (preg_match($visa_regex, $pan)) {
            return "visa";
        }

        if (preg_match($mastercard_regex, $pan)) {
            return "mastercard";
        }

        if (preg_match($discover_regex, $pan)) {
            return "discover";
        }

        if (preg_match($maestro_regex, $pan)) {
            if ($pan[0] == '5') {//started 5 must be mastercard
                return "mastercard";
            }
            return "maestro"; //maestro is all 60-69 which is not something else, thats why this condition in the end
        }
        return ""; //unknown for this system
    }
}
