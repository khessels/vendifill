<?php

namespace Database\Factories;

use App\Models\old\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

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
    }
}
