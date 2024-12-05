<?php

namespace Database\Factories;

use App\Models\Location;
use App\Traits\RandomCoordinates;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class LocationFactory extends Factory
{
    protected $model = Location::class;
    use RandomCoordinates;

    public function definition(): array
    {
        $lat = 9.9351229;
        $long = -84.099183;
        $center = [$lat, $long];
        $point = $this->Coordinates($center, 10);
        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'zip' => fake()->postcode(),
            'country_code' => 506,
            'province' => fake()->city(),
            'canton' => "",
            'email' => fake()->unique()->safeEmail(),
            'description' => fake()->sentence(),
            'access' => fake()->randomElement(['PUBLIC', 'PRIVATE']),
            'active' => 'YES',
            'contact_details' => fake()->text(),
            'managed_by' => fake()->sentence(),
            'location_emergency' => fake()->sentence(),
            'coordinates' => DB::raw("(ST_GeomFromText('POINT(" . $point[0] . " " . $point[1] .  ")', 4326))"),
        ];
    }
}
