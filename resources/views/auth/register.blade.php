@extends('layouts.auth')


@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
            <x-animated-logo />
            <h1 class="text-3xl font-semibold mb-6">Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name:</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email:</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password:</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">Confirm
                        Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 text-sm font-semibold mb-2">Role:</label>
                    <select name="role" id="role"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                        <option value="" disabled selected >Select Role</option>
                        <option value="superadmin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
