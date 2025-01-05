<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private array $data = [
        [
            'title' => 'Vue Composition API From Scratch',
            'description' => 'Project development on Vue Composition',
            'lessons_count' => '137',
            'length' => '16h 20m',
        ],

        [
            'title' => 'Builds with Vite',
            'description' => 'Let\'s explore the power of modern ',
            'lessons_count' => '33',
            'length' => '3h 49m',
        ]
    ];

    public function run(): void
    {
        Course::truncate();
        Course::factory(10)->create();

    }
}
