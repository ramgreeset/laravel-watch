<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        $hours = fake()->numberBetween(1, 50);
        $minutes = fake()->numberBetween(0, 59);

        return [
            'title' => ucfirst(fake()->words(rand(2, 4), true)),
            'description' => ucfirst(fake()->paragraph(1)),
            'lessons_count' => fake()->numberBetween(1, 50),
            'length' => "{$hours}h {$minutes}min",
        ];
    }
}
