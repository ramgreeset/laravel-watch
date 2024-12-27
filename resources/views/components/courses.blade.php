@php
    $courses = [
            [
            'title' => 'Course one',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
            'lessons_count'=> '5',
            'length'=>'2h 43m',
            ],
            [
            'title' => 'Course two',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
            'lessons_count'=> '5',
            'length'=>'2h 43m',
            ],
            [
            'title' => 'Course three',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
            'lessons_count'=> '5',
            'length'=>'2h 43m',
            ],
            [
            'title' => 'Course four',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis earum hic impedit molestias, quasi rem repellendus sequi soluta veniam!',
            'lessons_count'=> '5',
            'length'=>'2h 43m',
            ]
        ]
@endphp

<section>
    <div class="container px-4 py-2">
        <h2 class="text-5xl text-gray-400 text-center mb-20">Latest Courses</h2>
        <div class="flex justify-between gap-2">
            @foreach($courses as $course)
                <x-course :$course/>
            @endforeach
        </div>
    </div>
</section>
