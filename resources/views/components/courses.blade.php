<section>
    <div class="container px-4 py-2">
        <h2 class="text-5xl text-gray-400 text-center mb-20">{{ $heading }}</h2>
        <div class="flex justify-between gap-2">
            @foreach($courses as $course)
                <x-course :$course/>
            @endforeach
        </div>
    </div>
</section>
