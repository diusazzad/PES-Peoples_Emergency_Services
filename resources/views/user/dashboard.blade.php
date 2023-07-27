@extends('layouts.dashboard')

@section('content')
    <div class="bg-white rounded-lg  p-1 h-screen">
        <div class="grid grid-cols-2 shadow">
            <h1 class="text-2xl font-bold mb-4 flex place-content-center underline">Overview</h1>
            <h1 class="flex place-content-center">Notificaiton</h1>
        </div>

        <div class="grid grid-cols-4 h-52 rounded ">
            <div class="shadow m-2 flex place-content-center">
                <div class="">

                </div>
            </div>
            <div class="shadow m-2 flex place-content-center">hello</div>
            <div class="shadow m-2 flex place-content-center">hello</div>
            <div class="shadow m-2 flex place-content-center">hello</div>
        </div>
        <div class="grid grid-cols-2 h-60">
            <div class="shadow-xl flex m-1">H</div>
            <div class="shadow-xl flex m-1">H</div>
        </div>
        <div class="grid grid-cols-3 h-16">
            <div class="shadow-xl flex m-1">H</div>
            <div class="shadow-xl flex m-1">H</div>
            <div class="shadow-xl flex m-1">H</div>
        </div>
    </div>
@endsection
