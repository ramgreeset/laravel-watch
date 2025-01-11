<x-layout>Course
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $lesson->title }}</h1>

            <div class="flex flex-col gap-2">
                <iframe
                    class="aspect-video rounded-md"
                    src="https://www.youtube.com/embed/kq64_4QiLhU?list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA"
                    title="{{ $lesson->title }}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <div>
                    <div class="flex justify-between grow">
                        <div class="flex gap-2">
                            <a href="#" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                                <x-icon name="chevron-left" class="size-6"/>
                            </a>
                            <a href="#" class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                                <x-icon name="chevron-right" class="size-6"/>
                            </a>
                        </div>
                        <div class="flex gap-2 font-semibold">
                            <a href="{{ route('courses.show', $lesson->course) }}"
                               class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                                All Lessons
                            </a>
                            <a href="https://github.com/"
                               target="_blank"
                               class=" rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                                Source Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
