<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Ticket;
use App\Models\TicketItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketItemFactory extends Factory
{
    protected $model = TicketItem::class;

    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),

            'ticket_id' => Ticket::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
