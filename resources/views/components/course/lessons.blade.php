<div class="flex flex-col grow gap-4">
    <h3 class="text-lg font-semibold text-right">{{ $lessons->count() }} lessons &middot; 2h 25min</h3>
    <div class="flex flex-col gap-4"></div>
    @foreach($lessons as $lesson)
        <x-lesson.card :$lesson/>
    @endforeach
</div>
