<?php

namespace Database\Factories;

use App\Models\Outlet;
use App\Models\OutletType;
use Illuminate\Database\Eloquent\Factories\Factory;

class OutletFactory extends Factory
{
    protected $model = Outlet::class;

    public function definition(): array
    {
        /*
                     $table->id();
            $table->string('name')->nullable(false);
            $table->string('contact')->nullable(false);
            $table->integer('country_code')->nullable(false)->default(506);
            $table->enum('active', ['YES', 'NO'])->nullable(false)->default('NO');
            $table->geography('coordinates')->nullable();
            $table->unsignedBigInteger('outlet_type_id')->index();
            $table->foreign('outlet_type_id')
                ->references('id')
                ->on('outlet_types');
            $table->timestamps();
         */
        return [
            'name' => $this->faker->name(),
            'contact' =>$this->faker->name() . ', ' . $this->faker->phoneNumber(),
            'country_code'=> 506,
            'active' => 'YES',
            'outlet_type_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
