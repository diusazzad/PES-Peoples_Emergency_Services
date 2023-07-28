<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite('resources/css/app.css')

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
