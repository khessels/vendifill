<?php

namespace Database\Factories;

use App\Models\Machine;
use App\Models\Product;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),

            'machine_id' => Machine::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
