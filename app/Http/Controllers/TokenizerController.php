<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\Http\Controllers\PaymentInterface;
use App\Traits\Tokenizer;

class TokenizerController extends APIController
{
    use Tokenizer;

    public function showIndex(Request $request)
    {
        try{
            return view('pages.tokenize.index');
        }catch(\Exception $e){
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function tokenize(Request $request)
    {
        try{
            $token = "";
            if(!empty($request->data)) {
                $token = $this->tokenizerExchangeForToken($request, config('app.brand_id'), $request->data);
            }
            return Redirect::back()->with('data_token', $token );
        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function retrieveData(Request $request)
    {
        try{
            $token = "";
            if(!empty($request->data)) {
                $token = $this->tokenizerExchangeForData($request, config('app.brand_id'), $request->data);
            }
            return Redirect::back()->with('get_data_token', $token );
        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function tokenizeCard(Request $request)
    {
        try{
            $apiController = new APIController();
            $card = $apiController->addCC($request)->getData();
            if(! empty($card->status)){
                return Redirect::back()->with('add_card', $card->data );
            }else{
                return Redirect::back()->with('add_card_errors', $card->errors );
            }

        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function retrieveCard(Request $request)
    {
        try{
            $apiController = new APIController();
            $card = $apiController->getCC($request, $request->token)->getData();
            if(! empty($card->status)){
                return Redirect::back()->with('get_card', $card->data );
            }else{
                if(!empty($card->errors)) {
                    return Redirect::back()->with('get_card_errors', $card->errors);
                }else{
                    return Redirect::back()->with('get_card_errors', ['Unknown error. Is the token a valid card ?']);
                }
            }
        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}

