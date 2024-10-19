<?php

namespace Database\Factories;

use App\Models\Slot;
use App\Models\SlotKv;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SlotKvFactory extends Factory
{
    protected $model = SlotKv::class;

    public function definition(): array
    {
        return [
            'key' => $this->faker->word(),
            'value' => $this->faker->word(),
            'json' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'slot_id' => Slot::factory(),
        ];
    }
}
