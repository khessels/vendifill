<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'zip' => fake()->postcode(),
            'country_code' => 506,
            'province' => fake()->city(),
            'canton' => "",
            'phone_1' => fake()->unique()->phoneNumber(),
            'phone_2' => fake()->unique()->phoneNumber(),
            'fax' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'description' => fake()->sentence(),
            'access' => fake()->randomElements(['PUBLIC', 'PRIVATE']),
            'active' => 'YES',
            'contact_details' => fake()->text(),
            'managed_by' => fake()->sentence(),
            'location_emergency' => fake()->sentence(),
        ];
    }
}
