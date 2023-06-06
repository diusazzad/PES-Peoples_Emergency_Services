<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project PES</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Meterial Desing --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href=" {{ asset('welcome/css/app.css') }}">
    <link rel="stylesheet" href=" {{ asset('welcome/css/modal.css') }}">
    <link rel="stylesheet" href="">

    {{-- <link rel="stylesheet" href="{{ asset('welcome/css/infiniteLoadingAnimation.css') }}"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    @vite('resources/css/app.css')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="module" src="./index.js"></script>

</head>





<script src="{{ asset('welcome/js/nav.js') }}"></script>
<script src="{{ asset('welcome/js/app.js') }}"></script>
{{-- <script src="{{ asset('welcome/js/preloader.js') }}"></script> --}}
<script src="{{ asset('welcome/js/modal.js') }}"></script>

<script>
    // =================Loading Animation=================
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = "none";
    })

    //
</script>
<script></script>
