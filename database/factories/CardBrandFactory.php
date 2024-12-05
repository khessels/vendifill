<?php

namespace Database\Factories;

use App\Models\CardBrand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CardBrandFactory extends Factory
{
    protected $model = CardBrand::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'archived_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
