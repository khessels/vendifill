<?php

namespace Database\Factories;

use App\Models\TestCard;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class TestCardFactory extends Factory
{
    protected $model = TestCard::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
