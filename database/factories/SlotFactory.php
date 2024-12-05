<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Slot;
use App\Models\SlotType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SlotFactory extends Factory
{
    protected $model = Slot::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid(),
            'product_count' => 0,
            'max_product_count' => 15,
            'price' => 0,
            'product_id' => Null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'slot_type_id' => fake()->numberBetween( 1, 10),
        ];
    }
}
