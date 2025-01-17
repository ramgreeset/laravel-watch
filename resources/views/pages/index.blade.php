<x-layout>
    <x-hero/>
    <section>
        <div class="container px-4 py-2">
            <h2 class="text-5xl text-gray-400 text-center mb-20">Last Courses</h2>
            <div class="grid grid-cols-4 gap-2">
                @foreach($courses as $course)
                    <x-course.card :$course/>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
