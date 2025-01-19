<x-layout>Course
    <section class="pt-32 container">
        <div class="flex flex-col gap-8 pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->id }}. {{ $lesson->title }}</h1>

            <div class="flex h flex-col gap-2">
                <x-lesson.player :$lesson/>
            </div>
        </div>
    </section>
</x-layout>
