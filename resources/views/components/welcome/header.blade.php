<header class="bg-blue-500 px-4 py-3 sm:px-6 md:px-8 lg:px-10 xl:px-12">
    <nav class="flex items-center justify-between">
        <div class="flex items-center">

            <x-animated-logo />
            {{-- <span class="text-white text-lg sm:text-xl md:text-2xl ml-2">My Website</span> --}}
        </div>
        <ul class="hidden sm:flex md:space-x-4 lg:space-x-4 xl:space-x-4 2xl:space-x-4" id="navigationLinks">
            <li><a href="#" class="text-white hover:underline">Home</a></li>
            <li><a href="{{ route('login') }}" class="text-white hover:underline">Login</a></li>
            <li><a href="{{ route('register') }}" class="text-white hover:underline">Signup</a></li>
            <li>
                <a href="#" class="text-white hover:underline"></a>
                <button id="sslczPayBtn" token="if you have any token validation" postdata=""
                    order="If you already have the transaction generated for current order" endpoint="/pay-via-ajax">Pay
                    Now</button>
            </li>

        </ul>
        {{-- <button class="sm:hidden text-white focus:outline-none" onclick="toggleNavigation()">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button> --}}
    </nav>
</header>

<script>
    function toggleNavigation() {
        const navigationLinks = document.getElementById('navigationLinks');
        navigationLinks.classList.toggle('hidden');
    }
</script>
{{-- ssl --}}
<script>
    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);
</script>
