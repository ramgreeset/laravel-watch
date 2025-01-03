<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect()->range(1, 10)->each(function (int $i) {

            Course::create([
                'title' => 'Course'.$i,
                'description' => 'Course desc',
                'lessons_count' => '3',
                'length' => '2h 35m',

            ]);
        });


    }
}
