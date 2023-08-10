@extends('layouts.auth')

@section('content')
    <div class="bg-white">
        <div class="flex items-center justify-center min-h-screen p-3">
            <div class="flex flex-col p-6 bg-white rounded-lg shadow-md">
                <div class="mb-6">
                    <x-animated-logo />
                    <p class="text-gray-600">Technology on your hand</p>
                    <p class="text-gray-600">Hello, we are working</p>
                </div>
                <div class="mb-6">
                    <h1 class="mb-2 text-lg font-semibold">Contact</h1>
                    <p class="text-gray-600">email@gmail.com</p>
                </div>
            </div>
            <div class="w-full max-w-md p-6 ml-4 bg-white rounded-lg shadow-md">
                <h1 class="mb-6 text-3xl font-semibold">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                            required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-semibold text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                            required>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="mt-4">
            <ul class="text-red-500 list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
