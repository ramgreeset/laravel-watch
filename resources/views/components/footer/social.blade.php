@php
    $socialLinks = [
        'youtube' => 'https://www.youtube.com/',
        'telegram' => 'https://web.telegram.org/k/',
        'github' => 'https://www.github.com',
        'x' => 'https://www.x.com',
    ]

@endphp

<ul class="flex gap-4 items-center">

    @foreach($socialLinks as $name => $href)
        <li>
            <a href="{{ $href }}" target="_blank">
                <x-icon :$name class="size-8 fill-white hover:fill-violet-200"/>
            </a>
        </li>
@endforeach

