<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [

            'name' => fake()->name(),
            'address' => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),

            'status' => fake()->randomElements(['active', 'inactive']),
            'banned' => fake()->randomElements(['no','yes']),
            'rating' => fake()->randomElements(['1','2','3','4','5']),
            'remember_token' => Str::random(10),
        ];
        /*
            $table->id();
            $table->point('gps')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('zip')->nullable();
            $table->string('country')->nullable(false);
            $table->string('province')->nullable(false);
            $table->string('canton')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();

            $table->string('description');
            $table->text('comments')->nullable();

            $table->enum('access',['public', 'private'])->default('public')->nullable(false);

            $table->text('location_responsible_by')->nullable();
            $table->integer('location_managed_by')->nullable();
            $table->text('location_emergency')->nullable();
            $table->text('location_description')->nullable();
            $table->string('demographics')->nullable();
         */
    }
}
