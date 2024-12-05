<?php

namespace Database\Factories;

use App\Models\CardBrand;
use App\Models\CreditCard;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CreditCardFactory extends Factory
{
    protected $model = CreditCard::class;

    public function definition(): array
    {
        return [
            'cc_number' => $this->faker->word(),
            'cc_mask' => $this->faker->word(),
            'cc_year' => $this->faker->word(),
            'cc_month' => $this->faker->word(),
            'cc_name' => $this->faker->name(),
            'cc_ccv' => $this->faker->word(),
            'card' => $this->faker->word(),
            'run_mode' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'card_brand_id' => CardBrand::factory(),
        ];
    }
}
