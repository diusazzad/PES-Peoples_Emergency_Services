<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>


    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100">

    <!-- Top Navigation Bar (sm, md) -->
    <nav class="px-4 py-3 text-white bg-blue-800 md:hidden">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold">Admin Panel</h2>
            <button class="text-white focus:outline-none" onclick="toggleSidebar()">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <div class="flex ">
        <!-- Sidebar (hidden on sm, md) -->
        <aside class="flex-shrink-0 hidden h-screen text-white bg-blue-800 w-60 sm:w-28 md:block">
            <div class="p-4">
                <h1>Welcome, {{ $user->name }}!</h1>
            </div>
            <nav class="p-2 ">
                <ul class="">
                    @auth
                        @if (auth()->user()->superadmin())
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Dashboard</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Users</a>
                            </li>
                        @elseif(auth()->user()->admin())
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Settings</a>
                            </li>
                        @elseif(auth()->user()->editor())
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Users</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Roles</a>
                            </li>
                            <!-- Add more editor-specific links here -->
                        @elseif(auth()->user()->user())
                            <li class="mb-2">
                                <a href="{{ route('user.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Dashboard</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Community</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('tasks.index') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Tasks</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('fitness.index') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Fitness</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Prayer List</a>
                            </li>

                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Payment</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-blue-700">Profile</a>
                            </li>
                        @endif

                        <li class="mb-2">
                            <a href="{{ route('logout') }}" class="block px-4 py-2 rounded-lg hover:bg-blue-700"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            <div class="p-4 bg-white rounded-lg shadow-lg">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        // Function to toggle the sidebar on smaller screens (md)
        function toggleSidebar() {
            const sidebar = document.querySelector('aside');
            sidebar.classList.toggle('hidden');
        }
    </script>
</body>

</html>
