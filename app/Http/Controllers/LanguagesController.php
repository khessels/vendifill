<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;
use Illuminate\Support\Facades\Session;

class LanguagesController extends Controller
{
    public function languageSwitch(Request $request)
    {
        try {
            $language = $request->input('language');
            Session::put('language', $language);
            return redirect()->back()->with('language_switched' , $language);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            $this->alertNotification($e->getMessage(), 400);
            return redirect()->back();

        }
    }
}
