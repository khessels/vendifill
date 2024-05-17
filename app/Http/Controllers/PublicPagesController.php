<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContentCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PublicPagesController extends ContentCache
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        try {
            $attributes = $this->getPageAttributes('welcome');
            return view('welcome')->with('footer', $this->footer)->with('attributes', $attributes);
            // return response()->json($this->responseObject($request, true, $skuOrdersDeliveries));
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

    public function recruitment(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            return view('recruitment');
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function about(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            return view('about');
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }


    public function resume(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            return view('resume');
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function projectBrief(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|bool|\Illuminate\Contracts\Foundation\Application
    {
        try {
            return view('project-brief');
        } catch (\Exception $e) {
            $this->criticalException(null, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
}
