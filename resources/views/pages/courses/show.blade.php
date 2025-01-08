<x-layout>Course
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">
            {{--            <x-course :$course/>--}}
            <h1 class="text-center font-extrabold text-5xl">{{ $course->title }}</h1>
            <div class="flex gap-6">
                <article class="flex flex-col gap-4">
                    <header class="text-lg font-semibold">Last
                        Update: {{ $course->updated_at->format('d.m.Y') }}</header>
                    <p>{{ $course->description }}</p>
                    <footer class="flex gap-2">
                        <a href="#"
                           class="text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 grow bg-violet-500 text-white hover:bg-violet-600">Start
                            Watching</a>
                        <a href="https://github.com"
                           class="text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 grow bg-gray-100 hover:bg-gray-200">Sourse
                            Code</a>
                    </footer>
                </article>
                <div>lessons</div>
            </div>
        </div>
    </section>
</x-layout>
