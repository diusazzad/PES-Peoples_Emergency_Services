
@extends('layouts.page')



<body class="">



    <nav class="bg-gray-900">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-white flex items-center">
                    <i class="material-icons text-white">home</i> Home
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
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cupiditate sapiente sed
                aut
                rerum! Nulla
                necessitatibus amet dicta deserunt, quasi eveniet consectetur voluptatibus tempora, quibusdam illum
                repellendus aut, beatae quo.</p>
            <img class="" src="{{ asset('storage/content/images/1_1685501548.jpg') }}" alt="Image">
        </div>
        <div class="container mx-auto border ">
            <h2 class="text-2xl font-bold mb-4">People's Emergency Service</h2>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                Section 1
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                Section 2
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>

            <button
                class="accordion bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-300 ease-in-out focus:outline-none py-3 px-6 w-full text-left">
                Section 3
            </button>
            <div class="panel bg-white p-6 mt-2">
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut
                    aliquip ex ea commodo consequat.
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
