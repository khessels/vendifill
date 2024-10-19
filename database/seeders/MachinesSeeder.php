<?php

namespace Database\Seeders;

use App\Models\Machine;
use App\Models\MachineProduct;
use App\Models\MachineSlot;
//use App\Models\MachineStock;
use App\Models\MachineType;
use App\Models\Product;
use App\Models\Slot;
use Illuminate\Database\Seeder;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $machineCount = 50;
        $rows = 10;
        $cols = 10;


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
        $this->command->info('added machine types');
        Slot::factory()->count($machineCount * ( $rows * $cols))->create();
        $this->command->info('added slots');
        Machine::factory()->count($machineCount)->create();
        $this->command->info('added machines');

        $slots = Slot::all();
        $machines = Machine::all();
        foreach( $machines as $index => $machine){
            $products = Product::inRandomOrder()->limit( $rows * $cols)->get();
            for($i = 1; $i <= ( $rows * $cols); $i++){
                $slot = $slots[ $index + ( $i - 1)];
                for( $row = 1; $row <= $rows; $row++ ){
                    for( $col = 1; $col <= $cols; $col++ ){
                        $slot->product_id = $products[ $i]->id;
                        $slot->save();
                        MachineSlot::create([ 'slot_id' => $slot->id, 'machine_id' => $machine->id, 'row' => $row, 'col' => $col]);
                        MachineProduct::create([
                            'product_id'    => $products[ $i]->id,
                            'machine_id'    => $machine->id,
                            'price'         => $products[ $i]->msrp,
                        ]);
                    }
                }
            }
        }
        $this->command->info('filled the machines up');
        // change the uuid of the first machine to match the test esp32 uuid
        $machine = Machine::first();
        $machine->id = "3533398d-006e-4b4f-9bb4-0bf46df8e0a9";
        $machine->kv()->create([ 'key' => 'mode', 'value' => 'virtual']);
        $machine->save();
        $this->command->info('set uuid of the first machine to test uuid and to virtual mode');
    }
}
