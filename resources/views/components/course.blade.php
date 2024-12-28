<a class="bg-yellow-300 rounded-md hover:bg-yellow-400" href={{route('course', ['id' => $course['id']])}}>
    <article class="px-4 py-2">
        <header>
            <h2 class="font-semibold text-xl mb-2">{{ $course['title'] }}</h2>
        </header>
        <p class="font-normal">{{ $course['description'] }}</p>
        <footer class="flex flex-col items-end font-semibold">
            <div>
                <div class="flex items-center gap-2">
                    <x-icon name="film" class="size-4"/>
                    <span>{{ $course['lessons_count'] }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-icon name="clock" class="size-4"/>
                    <span>{{ $course['length'] }}</span>
                </div>
            </div>
        </footer>
    </article>
</a>
