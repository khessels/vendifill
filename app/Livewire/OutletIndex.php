<?php

namespace App\Livewire;

use App\Models\Outlet;
use Livewire\Component;

class OutletIndex extends Component
{
    public function render()
    {
        $outlets = Outlet::where('active', 'YES')->with('outlet_type')->get();
        return view('livewire.outlet-index')->with('outlets', $outlets);
    }
}
