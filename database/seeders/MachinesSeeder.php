<?php

namespace Database\Seeders;

use App\Models\Machine;
use App\Models\MachineProduct;
use App\Models\MachineStock;
use App\Models\MachineType;
use App\Models\MachineSlot;
use App\Models\Product;
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
            MachineType::create($machineType);
        }
        Machine::factory()->count(50)->create();

        foreach(Machine::all() as $machine){
            for($i = 1; $i <= 15; $i++){
                MachineSlot::create(['slot_index' => $i, 'machine_id' => $machine->id, 'product_count' => 15]);
            }
        }

        // set stock - & machine products
        foreach(Machine::with('slots')->whereNotNull('id')->get() as $machine){
            $products = Product::where('active', 'YES')->inRandomOrder()->limit(15)->get();
            foreach($machine->slots as $index => $slot){
                    MachineStock::create([
                        'product_id' => $products[$index]->id,
                        'machine_id' => $machine->id,
                        'machine_slot_id' => $slot->slot_index,
                        'recommended_price' => $products[$index]->msrp
                    ]);
                    MachineProduct::create([
                        'product_id' => $products[$index]->id,
                        'machine_id' => $machine->id,
                        'machine_slot_id' => $slot->slot_index,
                        'price' => $products[$index]->msrp,
                        'count' => 12
                        ]);

            }
        }

        // change the uuid of the first machine to match the test esp32 uuid
        $machine = Machine::first();
        $machine->uuid = "3533398d-006e-4b4f-9bb4-0bf46df8e0a9";
        $machine->kv()->create(['key' => 'mode', 'value' => 'test']);
        $machine->save();
    }
}
