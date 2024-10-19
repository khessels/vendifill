<?php

namespace Database\Factories;

use App\Models\Contract;
use App\Models\ContractHistory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ContractHistoryFactory extends Factory
{
    protected $model = ContractHistory::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'follow_up' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'contract_id' => Contract::factory(),
        ];
    }
}
