<?php

namespace Database\Factories;

use App\Models\CountryCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CountryCodeFactory extends Factory
{
    protected $model = CountryCode::class;

    public function definition(): array
    {
        return [
            'country_code' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'name_original' => $this->faker->name(),
            'country_code_2' => $this->faker->randomNumber(),
            'country_code_3' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
