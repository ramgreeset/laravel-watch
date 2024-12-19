@php

    $attributes = $attributes
    ->class(['text-violet-600 hover:text-violet-600' => $isActive])
    ->merge(['class'=>'text-xl font-semibold hover:text-purple-400']);

@endphp

<li>
    <a {{ $attributes }}>{{ $slot }}</a>
</li>
