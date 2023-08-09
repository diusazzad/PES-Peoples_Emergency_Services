@extends('layouts.dashboard')

@section('content')
    <div class="max-w-md mx-auto">
        <h2 class="mb-4 text-2xl font-bold">{{ $fitness->name }}</h2>
        <p class="mb-4">{{ $fitness->description }}</p>
        <p class="mb-4">Duration: {{ $fitness->duration }} minutes</p>
        <p class="mb-4">Calories Burned: {{ $fitness->calories_burned }}</p>
        <a href="{{ route('fitness.edit', $fitness->id) }}" class="px-4 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-700">Edit Fitness</a>
        <form action="{{ route('fitness.destroy', $fitness->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete Fitness</button>
        </form>
    </div>
@endsection
