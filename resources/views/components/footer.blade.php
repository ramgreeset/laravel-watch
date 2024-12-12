@php

    $items = [
        route('index') => 'Home',
        route('сourses') => 'Courses',
        route('contact') => 'Contact',
        route('terms') => 'Terms',
        route('privacy') => 'Privacy',
    ];
@endphp

<footer class="bg-violet-600">
    <div class="flex flex-col gap-8 container py-4 px-4">
        <div class="flex items-center gap-8 justify-between">
            <ul class="flex gap-4">
                @foreach($items as $href => $label)

                    <li>
                        <a class="font-medium text-white hover:text-purple-200" href="{{ $href }}">{{ $label }}</a>
                    </li>

                @endforeach
            </ul>
            <x-social>{{ $slot }}</x-social>
        </div>
    </div>
    <div class="flex items-center justify-center text-white bg-stone-900 py-2">
        <p>&copy;{{ config('app.name') }} {{ date('Y') }}. All right reserved.</p>
    </div>
</footer>
