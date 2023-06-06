<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Tailwind + Alpine</title>
    {{-- @vite('resource/app.css') --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('dashboard/admin/style.css') }}">
</head>

<body x-data="sidebar()" class="bg-gray-200 text-gray-700" @resize.window="handleResize()">
    <div class="xl:flex">

        <div x-show="isOpen()" class="fixed xl:static inset-0 flex bg-white bg-opacity-75 h-screen">

            <div @click.away="handleAway()" class="w-70 text-white bg-gray-800 shadow">

                <div class="flex bg-gray-900 content-between">

                    <div class="p-3 w-full">Project Sidebar</div>

                    <a @click.prevent="handleClose()" class="p-3 hover:bg-indigo-500 flex-1 flex items-center"
                        href="#">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#">
                    <svg class="h-6 w-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Home
                </a>
                <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#"><svg class="h-6 w-6 mr-3"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                    Resources
                </a>
                <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#"><svg class="h-6 w-6 mr-3"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Statistics
                </a>
                <a class="flex items-center w-full p-3 hover:bg-indigo-500" href="#"><svg class="h-6 w-6 mr-3"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Settings
                </a>
            </div>
        </div>



        <div>
            <nav class="text-gray-700 bg-white flex">
                <div x-show="!isOpen()" class="flex ">

                    <a x-show="!isOpen()" @click.prevent="handleOpen()"
                        class="p-3 hover:bg-red-500 hover:text-white animate-pulse" href="#">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>

                    <a class="p-3 hover:bg-indigo-500 hover:text-white" href="#">
                        Welcome Sir
                    </a>

                    <input type="search" placeholder="Search" name="" id=""
                        class=" p-1 m-2 border-2 border-red-700 rounded ">
                    <a class="p-3 hover:bg-indigo-500 hover:text-white" href="#">
                        Time
                    </a>
                    <a class="p-3 hover:bg-indigo-500 hover:text-white" href="#">
                        Quote of the Day!!!
                    </a>
                </div>

                <div class="transition-all duration-500 flex justify-end">
                    <div id="mySidenav"
                        class="bg-gray-600 w-0 sm:w-64 fixed z-50 top-0 right-0 overflow-x-hidden transition-all duration-500">
                        <a href="javascript:void(0)" class="text-gray-400 absolute top-0 right-4 text-3xl mt-4"
                            onclick="closeNav()">&times;</a>

                        <a href="#"
                            class="text-gray-400 block py-2 px-4 text-lg transition-colors duration-300 hover:text-white">About</a>
                        <a href="#"
                            class="text-gray-400 block py-2 px-4 text-lg transition-colors duration-300 hover:text-white">Services</a>
                        <a href="#"
                            class="text-gray-400 block py-2 px-4 text-lg transition-colors duration-300 hover:text-white">Clients</a>
                        <a href="#"
                            class="text-gray-400 block py-2 px-4 text-lg transition-colors duration-300 hover:text-white">Contact</a>
                    </div>

                </div>

                <div class="flex ml-auto">
                    <a class="p-3 hover:bg-indigo-500 hover:text-white" href="#">
                        Account
                    </a>
                    <a href="">
                        <span class="p-2 text-3xl cursor-pointer " onclick="openNav()">&#9776; </span>

                    </a>
                </div>

            </nav>

            <main
                class="mainClass m-1  grid gap-4 p-4 md:grid-cols-2 lg:grid-cols-3 bg-gradient-to-r from-blue-400 to-cyan-200">

                <div class="shadow-lg">
                    <div class="px-4 py-3 text-white bg-indigo-500 flex gap-3">
                        <h5>Task Management</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                        </svg>

                    </div>
                    <p class="p-4 bg-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Nam euismod est at nunc rutrum, sit amet
                        eleifend magna lacinia. Nullam pharetra suscipit
                        ultricies. Nulla aliquet porttitor porta. Sed
                        finibus pretium diam, vitae volutpat arcu accumsan
                        a. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos.
                        Suspendisse potenti. Suspendisse lacus ante, aliquet
                        in dignissim non, ultrices lobortis metus. Integer
                        auctor laoreet odio et molestie. Maecenas semper
                        egestas justo, nec tincidunt augue.
                    </p>
                </div>
                <div class="shadow-lg">
                    <div class="px-4 py-3 text-white bg-indigo-500 flex hap-4">
                        <h5> User Management</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                        </svg>
                    </div>
                    <p class="p-4 bg-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Nam euismod est at nunc rutrum, sit amet
                        eleifend magna lacinia. Nullam pharetra suscipit
                        ultricies. Nulla aliquet porttitor porta. Sed
                        finibus pretium diam, vitae volutpat arcu accumsan
                        a. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos.
                        Suspendisse potenti. Suspendisse lacus ante, aliquet
                        in dignissim non, ultrices lobortis metus. Integer
                        auctor laoreet odio et molestie. Maecenas semper
                        egestas justo, nec tincidunt augue.
                    </p>
                </div>
            </main>

        </div>
    </div>
    <script src="{{ asset('dashboard/admin/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
