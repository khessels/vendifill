<?php

namespace App\Livewire;

use App\Models\Location;
use App\Models\Machine;
use App\Models\MachineType;
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
            ->with('machine_type');

        return view('livewire.machine-index')
            ->with('locations', $locations ?? [])
            ->with('machines', $machines ?? [])
            ->with('machine_types', $machineTypes ?? []);
    }
}
