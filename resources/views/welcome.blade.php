@extends('layouts.page')



<body class="">



    <nav class="bg-gray-900">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-white flex items-center">
                    {{-- <i class="material-icons text-white">home</i> Home --}}
                    <x-logo></x-logo>
                </a>

                <!-- Menu Icon -->
                <button id="menu-toggle" class="text-white focus:outline-none lg:hidden">
                    <i class="material-icons transition-transform duration-300 transform">menu</i>
                </button>

                <ul id="menu" class="hidden lg:flex lg:items-center">
                    <li class="mr-6">
                        <a href="#" class="text-white flex items-center">
                            <i class="material-icons text-white">mood</i> Vision
                        </a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="text-white flex items-center">
                            <i class="material-icons text-white">volunteer_activism</i>Donation
                        </a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="text-white flex items-center">
                            <i class="material-icons text-white">info</i> About
                        </a>
                    </li>
                    <li class="mr-6">
                        <a href="#" class="text-white flex items-center">
                            <i class="material-icons text-white">contact_support</i> Contact
                        </a>
                    </li>

                    <li class="mr-6">
                        <a href="{{ url('/profile') }}" class="text-white flex items-center">
                            <i class="material-icons text-white">person</i> Profile
                        </a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="mr-6">
                                <a href="{{ url('/home') }}" class="text-white">
                                    Home
                                </a>
                            </li>
                        @else
                            <li class="mr-6">
                                <a href="{{ route('login') }}" class="text-white flex items-center">
                                    <i class="mr-1 material-icons text-white text-xl">login</i> Log in
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="mr-6">
                                    <a href="{{ route('register') }}" class="text-white flex items-center">
                                        <i class="material-icons text-white">app_registration</i> Register
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Icon Bar -->

    <!-- Top Headers -->
    <header class="">
        <div class="container mx-auto py-4">
            <h1 class="text-center">Welcome to People's Emergency Services - PES</h1>
        </div>
        <div class="m-1 border rounded p-1">
            <button id="myBtn"
                class="bg-blue-500 align-middle hover:bg-blue-700 text-white w-fit font-bold py-2 px-4 rounded">
                Search
            </button>

            <!-- The Modal -->
            <div id="myModal"
                class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <!-- Modal content -->
                <div class="modal-content bg-white p-4 rounded shadow">
                    <span
                        class="close absolute top-0 right-0 mt-4 mr-4 text-gray-600 cursor-pointer text-2xl">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>
            </div>
        </div>
    </header>

    {{-- ==============================Accordion==================== --}}
    <div class="accordion flex flex-row border p-3 ">
        <div class="basis-1/2 border">
            <h1 class="">FAQ</h1>
            <p class="">The idea is to build a Platform where every people in our country have strong security
                anywhere any place, has better communication, a great mentality, and a matrix-free world where people
                can aware of every situation that happened and have an independent platform for themselves.

                If anyone works with this project and the vision, together we can develop a matrix-free world.</p>
            <img class="" src="{{ asset('welcome/image/1.jpg') }}" alt="Image">
            <img class="" src="{{ asset('welcome/image/2.jpg') }}" alt="Image">
            <img class="" src="{{ asset('welcome/image/3.jpg') }}" alt="Image">
        </div>
        <div class="container mx-auto border ">
            <h2 class="text-2xl font-bold mb-4">People's Emergency Service</h2>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                People's Emergency Services
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                   The idea is to people need emergency help when they needed. nowadays people
                   have the quick response if they need nearest person or nearest area for having anyon's help
                   or they can connect 999 services.
                </p>
            </div>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                Mental Health
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                    We live in a world where rat race and mental deppression are building and
                    it keep us weak. So , a user can now build their presonal habit and can have
                    a free vision of themselves
                </p>
            </div>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                Freedom Of Speech
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                    Freedom of speech is the most precious way to judge a person's
                    charecter and free to judge what he/she thinks . So the perpose of this
                    project leads you a better connective community.
                </p>
            </div>
        </div>

    </div>


    <div>
        <label>
            Material 3
            <md-checkbox checked></md-checkbox>
        </label>

        <md-outlined-button>Back</md-outlined-button>
        <md-filled-button>Next</md-filled-button </div>

        {{-- ==============================SlideShow --}}
        {{-- <div class="slideshow-container mx-auto max-w-screen-md">
        @foreach ($contents as $content)
            <div class="mySlides fade">
                <div class="numbertext">{{ $loop->iteration }}/{{ $content->image_path }}</div>
                <img class="h-5 w-5" src="{{ asset('storage/content/images/1_1685501548.jpg') }}" alt="Image">


                <div class="text">Caption Text</div>
            </div>



            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img class="h-5 w-5"
                    src="{{ asset('storage/content/images/wB9UHpdXY9jILPB6txhvnFZYq5YjYUmuy3xsaQTR.jpg') }}"
                    style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade"> --}}
        {{-- <div class="numbertext">3 / 3</div>
                {{-- <img src="{{  }}" style="width:100%"> --}}
        {{-- <div class="text">Caption Three</div>
            </div>
        @endforeach

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>



    <div class="flex justify-center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> --}}


        <div class="charts">

        </div>



</body>



</html>
