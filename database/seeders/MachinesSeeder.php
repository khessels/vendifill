<?php

namespace Database\Seeders;

use App\Models\Machine;
use App\Models\MachineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
/*
 *             $table->geography('coordinates')->nullable();
            $table->uuid('uuid')->nullable();
            $table->string('brand')->nullable();
            $table->string('brand_model')->nullable();
            $table->smallInteger('year')->nullable();
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')
                ->references('id')
                ->on('locations');

            $table->unsignedBigInteger('machine_type_id')->index();
 */
        $machines = [];

        $machine["uuid"] = (string)Str::uuid();
        $machine["brand"] = "blabla";
        $machine["brand_model"] = "apo 103";
        $machine["year"] = "2017";
        $machine["location_id"] = "1";
        $machine["machine_type_id"] = "1";
        $machines[] = $machine;

        $machine["uuid"] = (string)Str::uuid();
        $machine["brand"] = "tratra";
        $machine["brand_model"] = "apo 104";
        $machine["year"] = "2017";
        $machine["location_id"] = "1";
        $machine["machine_type_id"] = "3";
        $machines[] = $machine;

        foreach($machines as $machine){
            $o = new Machine($machine);
            $o->save();
        }
    }
}
