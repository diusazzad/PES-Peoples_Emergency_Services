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

    <div class="announcements bg-gray-100 p-4">
        <h2 class="text-2xl font-semibold mb-4">Announcements</h2>
        @foreach ($announcements as $announcement)
            <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                <h3 class="text-xl font-semibold">{{ $announcement->title }}</h3>
                <p class="text-gray-700 mt-2">{{ $announcement->content }}</p>
                <p class="text-gray-500 mt-2">Posted by: {{ $announcement->user->name }}</p>
            </div>
        @endforeach
    </div>


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




    <nav class="bg-white border-gray-50 px-2 lg:px-4 py-2.5 dark:bg-gray-100">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
            <a href="https://flowbite.com" class="flex items-center">
                <x-home.logos />
            </a>
            <div class="flex items-center lg:order-2">
                <a href="{{ route('login') }}"
                    class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                <a href="{{ route('register') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 lg:px-5 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign
                    up</a>
                <button data-collapse-toggle="mega-menu" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between hidden w-full text-sm lg:flex lg:w-auto lg:order-1">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-blue-600 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 dark:text-blue-500 lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 lg:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 lg:w-auto hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 lg:dark:hover:bg-transparent dark:border-gray-700">
                            Company <svg aria-hidden="true" class="w-5 h-5 ml-1 lg:w-4 lg:h-4" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="mega-menu-dropdown"
                            class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 lg:grid-cols-3 dark:bg-gray-700"
                            data-popper-placement="bottom"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1147px, 763.5px, 0px);">
                            <div class="p-4 pb-0 text-gray-900 lg:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="flex w-full h-screen bg-no-repeat bg-cover sm:h-48 md:2xl:h-96" id="mainsectionA" loading="lazy"
        style="background-image: url('https://plus.unsplash.com/premium_photo-1681843661864-3f46bfb1a4fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');">

        <div class="flex items-center justify-center w-full h-full">
            <a href="" class="font-serif text-3xl">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                    d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                    clip-rule="evenodd" />
            </svg>
            <p class="font-serif text-3xl">Course Category</p>
        </div>

    </div>


    <div class="flex justify-center w-full mt-5 bg-gray-100 h-fit place-content-center" id="section">
        <div
            class="flex flex-row gap-3 place-center sm:grid sm:grid-cols-2 md:grid md:grid-cols-3 2xl:grid 2xl:grid-cols-4">
            <div
                class="flex flex-col items-center gap-2 p-10 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-red-500 rounded-full">
                    <i class='bx bx-shape-triangle'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Technology</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-purple-500 rounded-full">
                    <i class='bx bxl-graphql'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Language</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-blue-500 rounded-full">
                    <i class='bx bx-drink'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Technology</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-green-500 rounded-full">
                    <i class='bx bxs-capsule'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Language</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-yellow-500 rounded-full">
                    <i class='bx bx-code'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Technology</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-500 rounded-full">
                    <i class='bx bx-current-location'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Language</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-full">
                    <i class='bx bx-book-reader'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Technology</a>
            </div>
            <div
                class="flex flex-col items-center gap-2 p-5 m-1 bg-white border rounded-lg shadow-lg place-content-center">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-red-500 rounded-full">
                    <i class='bx bx-ghost'></i>
                </div>
                <a href="#" class="mt-4 text-lg font-medium text-gray-800">Language</a>
            </div>
        </div>
    </div>





    <div class="flex justify-center p-4" id="sectionB">
        <div class="grid grid-cols-2 gap-1 bg-red-500 sm:flex sm:flex-col">
            <div class="flex flex-col justify-center p-6 h-60">
                <h1 class="mb-4 text-2xl font-bold text-white">Become an Instructor</h1>
                <p class="mb-4 text-white">Choose from hundreds of free courses, or get a degree or certificate at a
                    breakthrough price. Learn at your own pace.</p>
                <button class="px-4 py-2 text-red-500 bg-white rounded-md">Get Started</button>
            </div>
            <div class="w-full bg-no-repeat bg-cover h-60"
                style="background-image: url('https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1032&q=80');">
            </div>
            <div class="w-full bg-no-repeat bg-cover h-60"
                style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');">
            </div>
            <div class="flex items-center justify-center w-full p-6 bg-white h-60">
                <div>
                    <h1 class="mb-4 text-2xl font-bold text-red-500">Become an Instructor</h1>
                    <p class="mb-4 text-gray-700">Choose from hundreds of free courses, or get a degree or certificate at a
                        breakthrough price. Learn at your own pace.</p>
                    <button class="px-4 py-2 text-white bg-red-500 rounded-md">Get Started</button>
                </div>
            </div>
        </div>
    </div>
@endsection
