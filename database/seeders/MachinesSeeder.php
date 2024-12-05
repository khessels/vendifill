<?php

namespace Database\Seeders;

use App\Models\Machine;
use App\Models\MachineProduct;
use App\Models\MachineSlot;
//use App\Models\MachineStock;
use App\Models\MachineType;
use App\Models\Product;
use App\Models\Slot;
use App\Models\SlotType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $chunkSize = 250;

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
        $this->command->info('inserting machine types');
        SlotType::factory()->count(10)->create();
        $this->command->info('inserting slot types');
        Slot::factory()->count($machineCount * ( $rows * $cols))->create();
        $this->command->info('inserting slots');
        Machine::factory()->count( $machineCount)->create();
        $this->command->info('added ' . $machineCount . ' machines');

        $slots = Slot::all();
        $machines = Machine::all();
        $machineSlots = [];
        $machineProducts = [];
        foreach( $machines as $machineIndex => $machine){
            $this->command->info('inserting requirements for one machine: ' . $machineIndex);
            $products = Product::inRandomOrder()->limit( ($rows * $cols) + 1)->get();
            for($i = 1; $i <= ( $rows * $cols); $i++){
                $slot = $slots[ $machineIndex + ( $i - 1)];
                for( $row = 1; $row <= $rows; $row++ ){
                    for( $col = 1; $col <= $cols; $col++ ){
                        $slot->product_id = $products[ $i]->id;
                        $slot->save();
                        $machineSlots[] = [ 'slot_id' => $slot->id, 'machine_id' => $machine->id, 'row' => $row, 'col' => $col];
                        $machineProducts[] =  [
                            'product_id'    => $products[ $i]->id,
                            'machine_id'    => $machine->id,
                            'price'         => $products[ $i]->msrp,
                        ];
                    }
                }
            }
        }

        $this->command->info('inserting machine slots');
        $ms = collect( $machineSlots);
        foreach( $ms->chunk( $chunkSize) as $index => $chunk ){
            $this->command->info('.. ' . $index);
            MachineSlot::insert( $chunk->toArray() );
        }

        $this->command->info('inserting machine suggested products');
        $mp = collect( $machineProducts);
        foreach( $mp->chunk($chunkSize) as $index => $chunk ){
            $this->command->info('.. ' . $index);
            MachineProduct::insert( $chunk->toArray());
        }

        $this->command->info('inserting a virtual device.');
        $machine = Machine::first();
        $machine->kv()->create([ 'key' => 'mode', 'value' => 'virtual']);
    }
}
