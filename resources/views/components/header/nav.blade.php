<nav>
    <ul class="flex gap-8">
        @foreach($items as $routeName => $label)

            <x-header.nav-item
                :href="route($routeName)"
                :is-active="request()->routeIs($routeName)">
                {{  $label }}
            </x-header.nav-item>
        @endforeach
    </ul>
</nav>
