@extends('layouts.app')

@section('content')
    {{-- <header>
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
    </footer> --}}

    <div class="flex w-full " id="header">
        <ul class="flex justify-center p-3 border place-items-center sm:text-xs sm:w-full gap-x-10 bg-rose-500">
            <li class="flex gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <a href="" class="">01717777197</a>
            </li>
            <li class="flex gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <a href="" class="">New Work</a>
            </li>
            <li class="flex gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <a href="">Sazzad@gmail.com</a>
            </li>
        </ul>
    </div>

    <div class="flex w-full h-screen bg-no-repeat bg-cover sm:h-48 md:2xl:h-96"
        style="background-image: url('https://plus.unsplash.com/premium_photo-1681843661864-3f46bfb1a4fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');">

        <div class="flex justify-center w-full place-items-center">
            <a href="" class="">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                    clip-rule="evenodd" />
            </svg>
            <p>Course Category</p>
        </div>

    </div>

    <div class="w-full p-4 bg-gray-100" id="section">
        
    </div>
@endsection
