<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;

class GuestPagesController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['red-button']     = ['attributes' => ['red-button', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['article-request']     = ['attributes' => ['article-request', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['about-us']    = ['attributes' => ['about-us', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['terms']       = ['attributes' => ['terms', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['faqs']       = ['attributes' => ['faqs', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['contact']     = ['attributes' => ['contact', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['services']     = ['attributes' => ['services', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines']     = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['refill']     = ['attributes' => ['refill', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['login']       = ['attributes' => ['login', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        //$this->loadPages();
    }
    public function articleRequest(Request $request)
    {
        try {
            $page = 'article-request';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.article-request.default')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function redButton(Request $request)
    {
        try {
            $page = 'red-button';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.red-button.default')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function faqs(Request $request)
    {
        try {
            $page = 'faqs';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.faqs.default')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function terms(Request $request)
    {
        try {
            $page = 'terms';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.terms.default')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function index(Request $request)
    {
        try {
            $template = 'guest';
            if(Auth::check()) {
                // $roles = Auth::user()->getRoleNames();
                $template = 'web';
            }
            $page = 'welcome';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.index.'.$template)
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function login(Request $request)
    {
        try {
            $page = 'login';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.auth.'.$page)
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function about_us(Request $request)
    {
        try {
            $page = 'about-us';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.about-us.default')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function services(Request $request)
    {
        try {
            $page = 'services';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.services.default')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function contactUs(Request $request)
    {
        try {
            $page = 'contact';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.contact.default')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function machines(Request $request)
    {
        try {
            $page = 'machines';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.default')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function refill(Request $request)
    {
        try {
            $page = 'refill';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.refill')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function contact(Request $request)
    {
        try {
            $page = 'contact';
            $this->loadPage($page);
            $content = $this->getPageContentAttributes($page);
            return view('pages.contact.default')
                ->with('page', $page)
                ->with('content' ,$content );

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
