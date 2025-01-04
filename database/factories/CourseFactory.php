<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(rand(2, 4), true),
            'description' => $this->faker->text(200),
            'lessons_count' => $this->faker->numberBetween(1, 50),
            'length' => "{$this->faker->numberBetween(1, 50)}h {$this->faker->numberBetween(0, 59) }min",
        ];
    }
}
