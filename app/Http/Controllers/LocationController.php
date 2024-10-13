<?php

namespace App\Http\Controllers;

use App\Models\old\Location;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{
    use Content;
    public function __construct()
    {
        // define pages used in this controller
        $this->pages['locations.index']    = ['attributes' => ['locations', 'footer', 'head', 'top-bar', 'side-menu', 'social-media']];

        $this->loadPages();
    }

    public function index(Request $request)
    {
        try {
            $page = 'locations.index';
            $content = $this->getPageContentAttributes($page);

            return view('pages.locations.index')
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
            $location = new Location($request->all());
            $location->save();
            return redirect()->route('view.locations.index');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            return Redirect::back()
                ->with('message', 'Location not added')
                ->with('alert-class', 'alert-warning');
        }
    }
}
