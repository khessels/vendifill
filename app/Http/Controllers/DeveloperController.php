<?php

namespace App\Http\Controllers;

use App\Models\old\Machine;
use App\Traits\Content;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    use Content;

    public function settings(Request $request)
    {
        try {
            return view('pages.developer.settings');
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
