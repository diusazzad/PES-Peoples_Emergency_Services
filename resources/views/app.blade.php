@extends('layouts.app')

@section('content')
    <header class="bg-blue-500 px-4 py-3 sm:px-6 md:px-8 lg:px-10 xl:px-12">
        <nav class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="https://example.com/logo.png" alt="Logo" class="h-10 w-10 sm:h-12 sm:w-12 md:h-14 md:w-14">
                <span class="text-white text-lg sm:text-xl md:text-2xl ml-2">My Website</span>
            </div>
            <ul class="hidden sm:flex md:space-x-4 lg:space-x-4 xl:space-x-4 2xl:space-x-4" id="navigationLinks">
                <li><a href="#" class="text-white hover:underline">Home</a></li>
                <li><a href="#" class="text-white hover:underline">Login</a></li>
                <li><a href="#" class="text-white hover:underline">Signup</a></li>
                <li><a href="#" class="text-white hover:underline">Contact</a></li>
            </ul>
            <button class="sm:hidden text-white focus:outline-none" onclick="toggleNavigation()">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </nav>
    </header>
    {{--
    - Hero Section
    - Main Title or Headline
    - Subtitle or Tagline
    - Hero Image or Illustration
    --}}
    <section class="bg-blue-500 text-white px-4 py-16 sm:py-20 md:py-24 lg:py-32 xl:py-40 2xl:py-48">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-bold mb-4">
                Main Title or Headline
            </h1>
            <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl">
                Subtitle or Tagline
            </p>
            <img src="https://example.com/hero-image.jpg" alt="Hero Image"
                class="mt-8 mx-auto sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 2xl:w-1/6">
        </div>
    </section>
    {{--
  - Features Section
  - Feature 1 (Icon, Title, Description)
  - Feature 2 (Icon, Title, Description)
  - Feature 3 (Icon, Title, Description)
   --}}
    <section class="bg-gray-100 px-4 py-16 sm:py-20 md:py-24 lg:py-32 xl:py-40 2xl:py-48">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-bold mb-8">
                Features Section
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center justify-center bg-blue-500 rounded-full h-12 w-12 mb-4">
                        <!-- Replace this with your desired icon or SVG -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Icon SVG path here -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Feature 1</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center justify-center bg-blue-500 rounded-full h-12 w-12 mb-4">
                        <!-- Replace this with your desired icon or SVG -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Icon SVG path here -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Feature 2</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center justify-center bg-blue-500 rounded-full h-12 w-12 mb-4">
                        <!-- Replace this with your desired icon or SVG -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Icon SVG path here -->
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Feature 3</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <!-- Add more feature divs as needed -->
            </div>
        </div>
    </section>

    {{--  --}}

    <section class="bg-blue-600 text-white px-4 py-16 sm:py-20 md:py-24 lg:py-32 xl:py-40 2xl:py-48">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-bold mb-8">
                Call to Action Section
            </h2>
            <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl mb-8">
                Call to Action Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <a href="#"
                class="bg-white text-blue-600 hover:bg-blue-600 hover:text-white py-3 px-6 rounded-lg font-bold text-lg sm:text-xl md:text-2xl">
                Call to Action Button
            </a>
        </div>
    </section>

    {{--
        - Services or Products Section (Optional)
  - Service/Product 1 (Image/Illustration, Title, Description)
  - Service/Product 2 (Image/Illustration, Title, Description)
  - Service/Product 3 (Image/Illustration, Title, Description)
    --}}
    <section class="bg-gray-100 px-4 py-16 sm:py-20 md:py-24 lg:py-32 xl:py-40 2xl:py-48">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-bold mb-8">
                Services or Products Section
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:md:grid-cols-3 2xl:md:grid-cols-3 gap-8">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/service1.jpg" alt="Service 1" class="h-40 w-40 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2 ">Service/Product 1</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/service2.jpg" alt="Service 2" class="h-40 w-40 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Service/Product 2</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/service3.jpg" alt="Service 3" class="h-40 w-40 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Service/Product 3</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nibh quis
                        felis posuere facilisis.</p>
                </div>

                <!-- Add more service/product divs as needed -->
            </div>
        </div>
    </section>
    {{-- -- About Us Section (Optional)
  - About Us Title
  - About Us Description
  - Team Members (Images, Names, Titles, Descriptions)
 --}}
    <section class="bg-gray-100 px-4 py-16 sm:py-20 md:py-24 lg:py-32 xl:py-40 2xl:py-48">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-bold mb-8">
                About Us
            </h2>
            <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl mb-8">
                About Us Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-8">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/team-member1.jpg" alt="Team Member 1"
                        class="h-40 w-40 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Team Member 1</h3>
                    <p class="text-gray-700">Title or Role</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/team-member2.jpg" alt="Team Member 2"
                        class="h-40 w-40 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Team Member 2</h3>
                    <p class="text-gray-700">Title or Role</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg">
                    <img src="https://example.com/team-member3.jpg" alt="Team Member 3"
                        class="h-40 w-40 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Team Member 3</h3>
                    <p class="text-gray-700">Title or Role</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <!-- Add more team member divs as needed -->
            </div>
        </div>
    </section>

    {{--
  - Footer
  - Navigation Menu (Links to Important Pages)
  - Copyright Information
--}}
    <footer class="bg-gray-800 text-white px-4 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24">
        <div class="max-w-6xl mx-auto text-center">
            <nav class="mb-8">
                <ul class="flex flex-wrap justify-center space-x-4 sm:space-x-6 md:space-x-8">
                    <li><a href="#" class="text-white hover:underline">Home</a></li>
                    <li><a href="#" class="text-white hover:underline">About</a></li>
                    <li><a href="#" class="text-white hover:underline">Services</a></li>
                    <li><a href="#" class="text-white hover:underline">Contact</a></li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </nav>
            <p class="text-sm sm:text-base">&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleNavigation() {
            const navigationLinks = document.getElementById('navigationLinks');
            navigationLinks.classList.toggle('hidden');
        }
    </script>
@endsection
