@php
    $items = config('watch.nav_items')->reject(
    fn ($label, $routeName)=>in_array($routeName,['login','register'])
);
@endphp
<ul class="flex gap-4">
    @foreach($items as $routeName => $label)
        <li>
            <a class="font-medium text-white hover:text-purple-200" href="{{ route($routeName) }}">{{ $label }}</a>
        </li>
    @endforeach
</ul>
