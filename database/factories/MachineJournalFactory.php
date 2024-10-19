<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\MachineJournal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MachineJournalFactory extends Factory
{
    protected $model = MachineJournal::class;

    public function definition(): array
    {
        return [
            'event' => $this->faker->word(),
            'data' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'machine_id' => Machine::factory(),
        ];
    }
}
