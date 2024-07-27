<?php

namespace App\Livewire;

use App\Models\Outlet;
use Livewire\Component;
use Livewire\WithPagination;
class OutletIndex extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $outlets = Outlet::where('active', 'YES')->with('outlet_type')->get();
        return view('livewire.outlet-index')->with('outlets', $outlets);
    }
}
