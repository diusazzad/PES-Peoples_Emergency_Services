@extends('layouts.app')

@section('content')
    <header>
        <!-- Include the Header component -->
        <x-welcome.header />
    </header>

    <main>
        <!-- Include the Hero component -->
        <x-welcome.hero />

        <!-- Include the Features component -->
        <x-welcome.features />

        <!-- Include the CallToAction component -->
        <x-welcome.call-to-action />

        <!-- Include the Services component -->
        <x-welcome.services />

        <!-- Include the AboutUs component -->
        <x-welcome.about-us />

        <x-welcome.contact-form/>
    </main>

    <footer>
        <!-- Include the Footer component -->
        <x-welcome.footer />
    </footer>
@endsection
