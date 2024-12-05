<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\OutletType;
use App\Traits\Content;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OutletController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = 'outlets.index';
            $outletTypes = OutletType::all();
            return view('pages.outlets.index')
                ->with('outlet_types', $outletTypes ?? [])
                ->with('page', $page);
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
            return view('pages.machines.stock')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function config(Request $request)
    {
        try {
            $page = 'machines.config';
            return view('pages.machines.config')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function testingGround(Request $request)
    {
        try {
            $page = 'machines.testing-ground';
            return view('pages.machines.testing-ground')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
