<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;

class WebPagesController extends Controller
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
        $this->loadLocale();
        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            $page = 'welcome';
            $content = $this->getPageContentAttributes($page);
            return view('pages.index.web')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function profile(Request $request)
    {
        try {
            $page = 'profile';
            $content = $this->getPageContentAttributes($page);
            return view('pages.auth.profile')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function recovery(Request $request)
    {
        try {
            $page = 'recovery';
            $content = $this->getPageContentAttributes($page);
            return view('pages.auth.recovery')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function signup(Request $request)
    {
        try {
            $page = 'signup';
            $content = $this->getPageContentAttributes($page);
            return view('pages.auth.recovery')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
