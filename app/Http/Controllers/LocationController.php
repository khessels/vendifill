<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        try {
            $page = 'locations.index';
            return view('pages.locations.index')
                ->with('page', $page);
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
            $this->alertNotification($e->getMessage(), 'warning');
            return Redirect::back();
        }
    }
}
