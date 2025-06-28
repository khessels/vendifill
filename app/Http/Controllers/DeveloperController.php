<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Traits\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DeveloperController extends Controller
{
    public function settings(Request $request)
    {
        try {
            return view('pages.developer.settings');
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function switchMenu(Request $request)
    {
        try {
            $menuType = Cookie::get('menuType');
            if ( empty( $menuType) || $menuType === 'web') {
                $menuType = 'guest';
            } else {
                $menuType = 'web';
            }
            Cookie::queue('menuType', $menuType);
            return redirect()->back()->with('success', 'switched to: ' . $menuType);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }
    public function vendingMachine( Request $request)
    {
        try {
            $machines = Machine::with('kv')->whereHas('kv', function ($query) {
                $query->where('key', 'mode')->where('value', 'virtual');
            })->get();
            return view('pages.developer.machines.vending')->with('machines', $machines);
        } catch (\Exception $e) {
            $this->criticalException($request, $e, __FILE__, __FUNCTION__, __LINE__);
            abort(404);
        }
    }

}
