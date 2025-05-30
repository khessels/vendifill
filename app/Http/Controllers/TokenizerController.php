<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use net\authorize\api\contract\v1 as AnetAPI;
//use net\authorize\api\controller as AnetController;
// use App\Http\Controllers\PaymentInterface;
use App\Traits\Content;
use App\Traits\Tokenizer;
use Illuminate\Support\Facades\Session;

class TokenizerController extends APIController
{
    use Tokenizer;
    public function index(Request $request)
    {
        try {
            $page = 'tokenize.index';
            return view('pages.tokenize.web')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function tokenize(Request $request)
    {
        try{
            if(!empty($request->data)) {
                $token = $this->tokenizerExchangeForToken($request, config('app.brand_id'), $request->data);
                $request->session()->put('token', $token);
            }
            $this->alertNotification( 'Data exchanged for token');
            return Redirect::back()->with('success', 'Data exchanged for token');
        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            $this->alertNotification( $e->getMessage(), 'error');
            return redirect()->back();
        }
    }
    public function retrieveData(Request $request)
    {
        try{
            if(!empty($request->data)) {
                $data = $this->tokenizerExchangeForData($request, config('app.brand_id'), $request->data);
                $request->session()->put('token_data', $data);
            }
            return Redirect::back()->with('success', 'token exchanged for data');
        }catch(\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            $this->alertNotification( $e->getMessage(), 'error');
            return redirect()->back();
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
            $this->alertNotification( $e->getMessage(), 'error');
            return redirect()->back();
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
            $this->alertNotification( $e->getMessage(), 'error');
            return redirect()->back();
        }
    }
}

