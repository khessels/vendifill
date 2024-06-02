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
        $this->pages['about-us']    = ['attributes' => ['about-us', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['terms']       = ['attributes' => ['terms', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['faqs']       = ['attributes' => ['faqs', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['contact']     = ['attributes' => ['contact', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['services']     = ['attributes' => ['services', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines']     = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['refill']     = ['attributes' => ['refill', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['login']       = ['attributes' => ['login', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

         $this->loadPages();
    }
    public function faqs(Request $request)
    {
        try {
            $page = 'faqs';
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
            $content = $this->getPageContentAttributes($page);
            return view('pages.services.default')
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
