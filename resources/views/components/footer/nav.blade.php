<ul class="flex gap-4">
    @foreach($items as $href => $label)
        <li>
            <a class="font-medium text-white hover:text-purple-200" href="{{ $href }}">{{ $label }}</a>
        </li>
    @endforeach
</ul>
