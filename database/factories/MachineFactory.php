<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Traits\RandomCoordinates;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class MachineFactory extends Factory
{
    protected $model = Machine::class;
    use RandomCoordinates;
    public function definition(): array
    {
        $lat = 9.9351229;
        $long = -84.099183;
        $center = [$lat, $long];
        $point = $this->Coordinates($center, 10);
        return [
            'id' => $this->faker->uuid(),
            'stationary' => 'YES',
            'location_id' =>  $this->faker->numberBetween(1,150),
            'machine_type_id' => $this->faker->numberBetween(1,6),
            'coordinates' => DB::raw("(ST_GeomFromText('POINT(" . $point[0] . " " . $point[1] .  ")', 4326))"),
        ];
    }
}
