<?php

namespace App\Http\Controllers;

use App\Models\old\Outlet;
use App\Models\old\OutletType;
use App\Traits\Content;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OutletController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
//        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['profile']     = ['attributes' => ['profile', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['signup']      = ['attributes' => ['signup', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['recovery']    = ['attributes' => ['recovery', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['outlets.index']    = ['attributes' => ['outlets', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

        // load the pages and partials
        //$this->loadLocale();
        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            $page = 'outlets.index';
            $content = $this->getPageContentAttributes($page);

            $outletTypes = OutletType::all();
            return view('pages.outlets.index')
                ->with('outlet_types', $outletTypes ?? [])
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            Debugbar::error($e->getMessage());
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function store(Request $request)
    {
        try {
            $outlet = new Outlet($request->all());
            $outlet->save();
            return redirect()->route('view.outlets.index');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return Redirect::back()
                ->with('message', 'Outlet not added')
                ->with('alert-class', 'alert-warning');
        }
    }
    public function stock(Request $request)
    {
        try {
            $page = 'machines.stock';
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.stock')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function config(Request $request)
    {
        try {
            $page = 'machines.config';
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.config')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function testingGround(Request $request)
    {
        try {
            $page = 'machines.testing-ground';
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.testing-ground')
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
