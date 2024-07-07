<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Machine;
use App\Models\MachineProduct;
use App\Models\MachineStock;
use App\Models\MachineType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Traits\Content;
use Illuminate\Support\Facades\Redirect;

class MachineController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
//        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['profile']     = ['attributes' => ['profile', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['signup']      = ['attributes' => ['signup', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['recovery']    = ['attributes' => ['recovery', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines.index']    = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines.config']    = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines.stock']    = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['machines.testing-ground']    = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

        // load the pages and partials
        //$this->loadLocale();
        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            $page = 'machines.index';
            $content = $this->getPageContentAttributes($page);
            $locations = Location::where('active', 'yes')->get();
            $machineTypes = MachineType::all();
            return view('pages.machines.index')
                ->with('locations', $locations ?? [])
                ->with('machine_types', $machineTypes ?? [])
                ->with('page', $page)
                ->with('content' ,$content );
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function store(Request $request)
    {
        try {
            $machine = new Machine($request->all());
            $machine->save();
            return redirect()->route('view.machines.index');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return Redirect::back()
                ->with('message', 'Machine not added')
                ->with('alert-class', 'alert-warning');
        }
    }
    public function stock(Request $request, $uuid)
    {
        try {
            $machine = Machine::where('uuid', $uuid)->with('slots')->with('machine_products.product')->first();
            $machineStock = MachineStock::where('machine_id', $machine->id)->with('product')->get();
            $machineProducts = MachineProduct::where('machine_id', $machine->id)->with('product')->get();

            $page = 'machines.stock';
            $content = $this->getPageContentAttributes($page);
            return view('pages.machines.stock')
                ->with('machine', $machine)
                ->with('machine_stock', $machineStock ?? [])
                ->with('machine_products', $machineProducts ?? [])
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
