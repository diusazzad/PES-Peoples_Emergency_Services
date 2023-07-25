<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')

    <!-- Additional styles -->
    <style>
        /* Add any custom styles here */
    </style>
    @vite('resources/js/app.js')
    {{-- @inertiaHead --}}
</head>

<body>
    <div class="">
        {{-- @inertia --}}
        @yield('content')
    </div>
</body>

</html>
