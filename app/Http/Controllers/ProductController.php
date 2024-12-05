<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = 'products.index';
            return view('pages.products.index')
                ->with('page', $page);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function store(Request $request)
    {
        try {
            $machine = new Product($request->all());
            $machine->save();
            return redirect()->route('view.products.index');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return Redirect::back()
                ->with('message', 'Machine not added')
                ->with('alert-class', 'alert-warning');
        }
    }

}
