<?php

namespace App\Livewire;

use App\Models\old\Location;
use App\Models\old\Machine;
use App\Models\old\MachineType;
use Livewire\Component;
use Livewire\WithPagination;

class MachineIndex extends Component
{
    use WithPagination;
    //protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $locations = Location::where('active', 'yes')->get();
        $machineTypes = MachineType::all();
        $machines = Machine::with('location')
            ->with('machine_type')
            ->get();

        return view('livewire.machine-index')
            ->with('locations', $locations ?? [])
            ->with('machines', $machines ?? [])
            ->with('machine_types', $machineTypes ?? []);
    }
}
