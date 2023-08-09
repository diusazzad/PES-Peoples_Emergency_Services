@extends('layouts.dashboard')

@section('content')
    <a href="{{ route('fitness.create') }}"
        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create Fitness</a>

    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Duration</th>
                <th class="px-4 py-2">Calories Burned</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fitnessData as $fitness)
                <tr>
                    <td class="px-4 py-2 border">{{ $fitness->name }}</td>
                    <td class="px-4 py-2 border">{{ $fitness->description }}</td>
                    <td class="px-4 py-2 border">{{ $fitness->duration }}</td>
                    <td class="px-4 py-2 border">{{ $fitness->calories_burned }}</td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('fitness.show', $fitness->id) }}"
                            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">View</a>
                        <a href="{{ route('fitness.edit', $fitness->id) }}"
                            class="px-4 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700">Edit</a>
                        <form action="{{ route('fitness.destroy', $fitness->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
