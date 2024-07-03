<?php

namespace Database\Seeders;

use App\Models\MachineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $machineTypes = [];
        $machineType['machine_type'] = 'Snacks Cooled';
        $machineTypes[] = $machineType;
        $machineType['machine_type'] = 'Snacks NOT Cooled';
        $machineTypes[] = $machineType;
        $machineType['machine_type'] = 'Soft drink Cooled';
        $machineTypes[] = $machineType;
        $machineType['machine_type'] = 'Soft drink NOT Cooled';
        $machineTypes[] = $machineType;
        $machineType['machine_type'] = 'Combo Cooled';
        $machineTypes[] = $machineType;
        $machineType['machine_type'] = 'Combo NOT Cooled';
        $machineTypes[] = $machineType;
        foreach($machineTypes as $machineType){
            $o = new MachineType($machineType);
            $o->save();
        }
    }
}
