<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder

{

    private array $data = [
        [
            'number' => 1,
            'title' => 'Global search',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 2,
            'title' => 'Navigation',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 3,
            'title' => 'File navigation',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 4,
            'title' => 'Navigation between classes, interfaces, methods',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 5,
            'title' => 'Code formatting and import optimization',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 6,
            'title' => 'Searching and replacing',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 7,
            'title' => 'Code completion',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 8,
            'title' => 'Hints in the source code',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 9,
            'title' => 'Code generation',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 10,
            'title' => 'Refactoring',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 11,
            'title' => 'Editing',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 12,
            'title' => 'Multiple cursors',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 13,
            'title' => 'Additional keyboard shortcuts',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 14,
            'title' => 'Live templates',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 15,
            'title' => 'File templates',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',

        ],
        [
            'number' => 16,
            'title' => 'Quick lists',
            'video_url' => 'https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA',
            'commit_url' => 'https://github.com/ramgreeset/laravel-watch/commit/f13af9791bf72dfd43797ef9bc26545d11a51227',
        ],
    ];

    public function run(): void
    {
        Lesson::truncate();

        $courseTitle = 'JetBrains IDE | Productivity';

        Lesson::factory(count($this->data))
            ->for(Course::where('title', $courseTitle)
                ->first())
            ->sequence(...$this->data)
            ->create();


        Course::whereNot('title', $courseTitle)->each(fn(Course $course) => collect()
            ->range(1, mt_rand(5, 20))
            ->each(fn($number) => Lesson::factory()
                ->for($course)
                ->create(['number' => $number])
            )
        );

    }
}
