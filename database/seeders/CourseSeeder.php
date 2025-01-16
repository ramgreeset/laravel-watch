<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private array $data = [
        [
            'title' => 'JetBrains IDE | Productivity',
            'description' => 'Let\'s review how to use JetBrains IDEs productively. PhpStorm will be used for showcasing features.',
            'length' => '1h 40min',
            'repository_uri' => 'https://github.com/ramgreeset/laravel-watch',
        ],
    ];


    public function run(): void
    {
        Course::truncate();
        Course::factory(count($this->data))
            ->sequence(fn(Sequence $sequence) => $this->data[$sequence->index] ?? [])
            ->create();

    }

}
