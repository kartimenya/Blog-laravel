<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->realText(50, 2),
            'descr' => fake()->realText(500, 2),
            'author_id' => rand(1, 4),
            'created_at' => fake()->dateTimeBetween('-30 days', '-1 days'),
            'updated_at' => fake()->dateTimeBetween('-30 days', '-1 days'),
        ];
    }
}
