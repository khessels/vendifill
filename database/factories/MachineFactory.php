<?php

namespace Database\Factories;

use App\Models\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MachineFactory extends Factory
{
    protected $model = Machine::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'brand' =>  $this->faker->name(),
            'brand_model' =>  $this->faker->name(),
            'year' =>  $this->faker->year(),
            'location_id' =>  $this->faker->numberBetween(1,150),
            'machine_type_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
