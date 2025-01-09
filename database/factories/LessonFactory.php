<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first(),
            'number' => fake()->numberBetween(1, 15),
            'title' => ucfirst(fake()->words(rand(2, 4), true)),

        ];
    }
}
