<ul class="flex gap-4">
    @foreach(config('watch.social_links') as $socialUrl => $icon)
        <li>
            <a href="{{ $socialUrl }}" target="_blank">{!! $icon !!}</a>
        </li>
    @endforeach
</ul>
