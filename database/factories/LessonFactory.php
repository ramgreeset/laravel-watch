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
            'number' => 0,
            'title' => ucfirst(fake()->words(mt_rand(2, 4), true)),
            'video_url' => 'https://www.youtube.com/watch?v=F3n8U6HW5CY&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=48',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',
        ];
    }
}
