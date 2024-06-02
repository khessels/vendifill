<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;
use Illuminate\Support\Facades\Session;

class DeveloperController extends Controller
{
    use Content;
    public function __construct()
    {
//        // define pages used in this controller
//        $this->pages['developer.settings']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//
//        // load the pages and partials
//        $this->loadPages();
    }

    public function settings(Request $request)
    {
        try {
            //$page = 'developer.settings';
            //$content = $this->getPageContentAttributes($page);
            return view('pages.developer.settings');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
