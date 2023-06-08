<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{ asset('dashboard/user/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/user/nav.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="">



    <div class="grid grid-cols-3 gap-4 h-screen container ">

        <div class="col-span-1">
            <div class="sidenav rounded  m-1 bg-gray-800 text-white">
                <div class="topcontent ">
                    <!-- Logo content here -->
                    <div class="logo border mt-4"></div>
                    <div class="nav-links  mt-4 pt-2">
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="hover:text-green-400 p-1 rounded" href="#">Dashboard</a></div>
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="hover:text-green-400 p-1 rounded" href="#">Location</a></div>
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="task-list-link hover:text-green-400 p-1 rounded " href="{{ url('/home/tasks') }}">Task List</a></div>
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="hover:text-green-400 p-1 rounded" href="#">NearBy</a></div>
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="hover:text-green-400 p-1 rounded" href="#">Relatives</a></div>
                        <div class="text-center  hover:text-blue-200 m-2 p-2 rounded border hover:bg-slate-700"><a class="hover:text-green-400 p-1 rounded" href="#">Community</a></div>
                    </div>
                </div>

                <div class="profile m-3">
                    <img src="{{ asset('dashboard/img/Me.jpg') }}" alt="">
                    <h1>sazzad Hossain</h1>
                    <p>sazzadhossain.mahim@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div class="nav m-1 p-2 border" id="taskManager">
                <nav class="m-1 p-2 border w-full">
                    <div class="search">search</div>
                    <div class="data">date</div>
                    <div class="card"></div>
                    <div class="list"></div>
                </nav>
            </div>
            <div class="main border border-black m-2 p-2 rounded h-full" id="mainContent">
                <div class="border m-1 p-2 rounded flex flex-row gap-x-20 h-20">
                    <h1>Tasks</h1>
                    <h2>94</h2>
                    <h2>23</h2>
                </div>
                <div class="m-1 p-2 border rounded flex flex-row  gap-x-20 h-20">
                    <h1>in total</h1>
                    <h2>done,</h2>
                </div>
            </div>
        </div>
    </div>





</body>

</html>

<script src="{{ asset('dashboard/user/app.js') }}"></script>
<script src="{{ asset('dashboard/user/jquery.js') }}"></script>
