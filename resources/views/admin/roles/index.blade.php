@extends('layouts.dashboard')

@section('content')
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <h3 class="text-3xl font-medium text-gray-700">Assign Roles</h3>
        <div class="mt-8 overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Role</th>
                        <th class="px-4 py-2">Assign Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $user->name }}</td>
                            <td class="px-4 py-2">{{ $user->email }}</td>
                            <td class="px-4 py-2">{{ $user->role }}</td>
                            <td class="px-4 py-2">
                                <form method="POST" action="{{ route('admin.users.assign-role', $user->id) }}"
                                    class="flex space-x-2">
                                    @csrf
                                    <select name="role"
                                        class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                                        <option value="user">User</option>
                                        <option value="editor">Editor</option>
                                        <option value="admin">Admin</option>
                                        <option value="superadmin">Super Admin</option>
                                    </select>
                                    <button type="submit"
                                        class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                        Assign Role
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
