<?php

namespace Database\Factories;

use App\Models\old\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Liior\Faker\Prices;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $this->faker->addProvider(new Prices($faker));
        return [
            'name' =>  $this->faker->name(),
            'active'=> 'YES',
            'msrp' => $this->faker->price(10, 50),
            'packaging_id' =>  $this->faker->numberBetween(1,4),
        ];
    }
}
