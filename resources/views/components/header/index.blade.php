@php
    $navItems = collect($navItems)->reject(
    fn($label, $routeName)=>in_array($routeName,['terms','privacy'])
    );
@endphp


<header class="fixed inset-x-0 bg-white border-b">
    <div class="flex mx-auto items-center justify-between p-4 container">
        <x-header.logo/>
        <x-header.nav :items="$navItems"/>
    </div>
</header>
