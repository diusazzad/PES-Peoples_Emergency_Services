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
</head>

<body class="">



    <div class="grid grid-cols-3 gap-4 h-screen">

        <div class="col-span-1">
          <div class="sidenav rounded  m-1 bg-gray-800 text-white">
            <div class="logo">
              <!-- Logo content here -->
            </div>
            <div class="nav-links">
              <div><a class="" href="#">Dashboard</a></div>
              <div><a class="" href="#">Location</a></div>
              <div><a class="" href="#">Task List</a></div>
              <div><a class="" href="#">NearBy</a></div>
              <div><a class="" href="#">Relatives</a></div>
              <div><a class="" href="#">Community</a></div>
            </div>
            <div class="profile m-3">
              <img src="{{ asset('dashboard/img/Me.jpg') }}" alt="">
              <h1>sazzad Hossain</h1>
              <p>sazzadhossain.mahim@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="col-span-2">
          <div class="nav border">
            <nav>
              <div class="search">search</div>
              <div class="data">date</div>
              <div class="card"></div>
              <div class="list"></div>
            </nav>
          </div>
          <div class="main border">
            <div class="">
              <h1>Tasks</h1>
              <h2>94</h2>
              <h2>23</h2>
            </div>
            <div class="">
              <h1>in total</h1>
              <h2>done,</h2>
            </div>
          </div>
        </div>
      </div>






    </body>

</html>

<script src="{{ asset('dashboard/user/app.js') }}"></script>
