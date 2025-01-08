<x-layout>
    <section class="pt-32 px-5">
        <div class="flex flex-col gap-8 pb-24">
            <h2 class="text-5xl font-extrabold text-center">Courses</h2>
            <x-course.search/>
            <div class="grid grid-cols-4 gap-2">
                @foreach($courses as $course)
                    <x-course.card :$course/>
                @endforeach
            </div>

            {{ $courses->links() }}

        </div>
    </section>
</x-layout>
