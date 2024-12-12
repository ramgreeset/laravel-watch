<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-header/>

<main class="h-screen grid place-items-center text-7xl font-black">

    {{ $slot }}
</main>
<x-footer/>
</body>
</html>
