<?php

namespace Database\Factories;

use App\Models\SlotType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SlotTypeFactory extends Factory
{
    protected $model = SlotType::class;

    public function definition(): array
    {
        return [
            'slot_type' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
