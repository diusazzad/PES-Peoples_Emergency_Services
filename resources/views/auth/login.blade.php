@extends('layouts.auth')

@section('content')
    <div class="bg-white">
        <div class="min-h-screen flex items-center justify-center p-3">
            <div class="flex flex-col bg-white p-6 shadow-md rounded-lg">
                <div class="mb-6">
                    <x-animated-logo />
                    <p class="text-gray-600">Technology on your hand</p>
                    <p class="text-gray-600">Hello, we are working</p>
                </div>
                <div class="mb-6">
                    <h1 class="text-lg font-semibold mb-2">Contact</h1>
                    <p class="text-gray-600">email@gmail.com</p>
                </div>
            </div>
            <div class="max-w-md w-full bg-white p-6 shadow-md rounded-lg ml-4">
                <h1 class="text-3xl font-semibold mb-6">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                            required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                            required>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
