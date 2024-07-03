<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class LocationIndex extends Component
{
    public function render()
    {
        $locations = Location::all();
        return view('livewire.location-index')->with('locations', $locations);
    }
}
