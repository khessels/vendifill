<?php

namespace App\Http\Controllers;

use App\Models\old\Product;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
//        $this->pages['welcome']     = ['attributes' => ['welcome', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['profile']     = ['attributes' => ['profile', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['signup']      = ['attributes' => ['signup', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
//        $this->pages['recovery']    = ['attributes' => ['recovery', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];
        $this->pages['products.index']    = ['attributes' => ['machines', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

        // load the pages and partials
        //$this->loadLocale();
        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            $page = 'products.index';
            $content = $this->getPageContentAttributes($page);
            return view('pages.products.index')
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
