<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'number' => fake()->numberBetween(1, 15),
            'title' => ucfirst(fake()->words(rand(2, 4), true)),

        ];
    }
}
