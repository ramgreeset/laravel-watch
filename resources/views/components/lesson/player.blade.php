<iframe
    class="aspect-video rounded-md"
    src="{{ $lesson->video_url }}"
    title="{{ $lesson->title }}"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
</iframe>
<div>
    <div class="flex justify-between grow">
        <div class="flex gap-2">
            @if($lesson->previous)
                <a href="{{ route('lessons.show', $lesson->previous) }}"

                   class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                    <x-icon name="chevron-left" class="size-6"/>
                </a>
            @endif
            @if($lesson->next)
                <a href="{{ route('lessons.show', $lesson->next) }}"
                   class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                    <x-icon name="chevron-right" class="size-6"/>
                </a>
            @endif
        </div>
        <div class="flex gap-2 font-semibold">
            <a href="{{ route('courses.show', $lesson->course) }}"
               class="rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                All Lessons
            </a>
            <a href="{{ $lesson->commit_url }}"
               target="_blank"
               class=" rounded-md px-4 py-2 bg-gray-100 hover:bg-gray-200">
                Source Code
            </a>
        </div>
    </div>
</div>
