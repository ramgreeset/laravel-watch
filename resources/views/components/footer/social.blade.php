@php
    $socialLinks = [
        'https://www.youtube.com/'=> 'youtube',
        'https://www.telegram.com'=> 'telegram',
        'https://www.github.com'=> 'github',
        'https://www.x.com'=> 'x',
    ]

@endphp

<ul class="flex gap-4 items-center">

    @foreach($socialLinks as $link => $iconName)
        <li>
            <a href="{{ $link }}" target="_blank" class="text-xl font-semibold hover:text-purple-400">
                <x-icon name="{{ $iconName }}"/>
            </a>
        </li>
@endforeach

