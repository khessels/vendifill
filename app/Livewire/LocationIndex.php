<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class LocationIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $locations = Location::whereNotNull('id')->simplePaginate(15);
        return view('livewire.location-index')->with('locations', $locations);
    }
}
