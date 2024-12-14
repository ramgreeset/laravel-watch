@php
    $items = [
    route('index') => 'Home',
    route('сourses') => 'Courses',
    route('contact') => 'Contact',
    route('terms') => 'Terms',
    route('privacy') => 'Privacy',
];
@endphp

<ul class="flex gap-4">
    @foreach($items as $href => $label)

        <li>
            <a class="font-medium text-white hover:text-purple-200" href="{{ $href }}">{{ $label }}</a>
        </li>

    @endforeach
</ul>
