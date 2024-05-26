<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;
use Illuminate\Support\Facades\Session;

class LanguagesController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['profile']     = ['attributes' => ['profile', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['signup']      = ['attributes' => ['signup', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['recovery']    = ['attributes' => ['recovery', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

        // load the pages and partials
        //$this->loadLocale();
        $this->loadPages();
    }

    public function languageSwitch(Request $request)
    {
        try {
            $language = $request->input('language');
            Session::put('language', $language);

            return redirect()->back()->with('language_switched' , $language);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
