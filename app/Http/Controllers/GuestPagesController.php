<?php

namespace App\Http\Controllers;

use App\Traits\RandomCoordinates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;

class GuestPagesController extends Controller
{
    use RandomCoordinates;

    public function signup(Request $request)
    {
        try {
            $page = 'signup';
            return view('pages.auth.signup')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function articleRequest(Request $request)
    {
        try {
            $page = 'article-request';
            return view('pages.article-request.default')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function redButton(Request $request)
    {
        try {
            $page = 'red-button';
            return view('pages.red-button.default')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function faqs(Request $request)
    {
        try {
            $page = 'faq';
            return view('pages.faqs.default')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function terms(Request $request)
    {
        try {
            $page = 'terms';
            return view('pages.terms.default')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function index(Request $request)
    {
        try {
//            $lat = 9.9351229;
//            $long = -84.099183;
//            $center = [$lat, $long];
//            $point = $this->Coordinates($center, 10);
//            die($point);

            $template = 'guest';
            if(Auth::check()) {
                // $roles = Auth::user()->getRoleNames();
                $template = 'web';
            }
            $page = 'welcome';
            return view('pages.index.'.$template)
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function login(Request $request)
    {
        try {
            $page = 'login';

            return view('pages.auth.'.$page)
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function about_us(Request $request)
    {
        try {
            $page = 'about-us';
            return view('pages.about-us.default')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function services(Request $request)
    {
        try {
            $page = 'service';
            return view('pages.services.default')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function contactUs(Request $request)
    {
        try {
            $page = 'contact';
            return view('pages.contact.default')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
//    public function machines(Request $request)
//    {
//        try {
//            $page = 'machine';
//            $this->loadPage($page);
//            $content = $this->getPageContentAttributes($page);
//            return view('pages.machines.default')
//                ->with('page', $page)
//                ->with('content' ,$content );
//
//        } catch (\Exception $e) {
//            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
//            abort(404);
//        }
//    }
    public function refill(Request $request)
    {
        try {
            $page = 'refill';
            return view('pages.services.refill')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function machines(Request $request)
    {
        try {
            $page = 'machines';
            return view('pages.services.machines')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function contact(Request $request)
    {
        try {
            $page = 'contact';

            return view('pages.contact.default')
                ->with('page', $page);

        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
