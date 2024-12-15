@php

    $navItems = collect($navItems)->reject(
        fn ($label, $routeName)=>in_array($routeName,['login','register'])
    );

@endphp

<footer class="bg-violet-600">
    <div class="flex flex-col gap-8 container py-4 px-4">
        <div class="flex items-center gap-8 justify-between">
            <x-footer.nav :items="$navItems"/>
            <x-footer.social/>
        </div>
    </div>

    <div class="flex items-center justify-center text-white bg-stone-900 py-2">
        <x-footer.copyright/>
    </div>
</footer>