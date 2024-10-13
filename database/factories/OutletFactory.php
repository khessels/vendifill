<?php

namespace Database\Factories;

use App\Models\old\Outlet;
use App\Traits\RandomCoordinates;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class OutletFactory extends Factory
{
    use RandomCoordinates;
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

        $lat = 9.9351229;
        $long = -84.099183;
        $center = [$lat, $long];
        $point = $this->Coordinates($center, 10);
        return [
            'name' => $this->faker->name(),
            'coordinates' => DB::raw("(ST_GeomFromText('POINT(" . $point[0] . " " . $point[1] .  ")', 4326))"),
            'contact' =>$this->faker->name() . ', ' . $this->faker->phoneNumber(),
            'country_code'=> 506,
            'active' => 'YES',
            'outlet_type_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
