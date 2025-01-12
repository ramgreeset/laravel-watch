<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {

        $hours = fake()->numberBetween(1, 50);
        $minutes = fake()->numberBetween(0, 59);

        return [
            'title' => ucfirst(fake()->words(mt_rand(2, 4), true)),
            'description' => ucfirst(fake()->paragraph(1)),
            'length' => "{$hours}h {$minutes}min",
        ];
    }
}
