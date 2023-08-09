@extends('layouts.dashboard')

@section('content')
    <div class="max-w-md mx-auto">
        <h2 class="mb-4 text-2xl font-bold">Edit Fitness</h2>
        <form action="{{ route('fitness.update', $fitness->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block mb-1 font-bold">Name</label>
                <input type="text" name="name" id="name" value="{{ $fitness->name }}" class="w-full px-3 py-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-1 font-bold">Description</label>
                <textarea name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded">{{ $fitness->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="duration" class="block mb-1 font-bold">Duration</label>
                <input type="number" name="duration" id="duration" value="{{ $fitness->duration }}" class="w-full px-3 py-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="calories_burned" class="block mb-1 font-bold">Calories Burned</label>
                <input type="number" name="calories_burned" id="calories_burned" value="{{ $fitness->calories_burned }}" class="w-full px-3 py-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Save</button>
        </form>
    </div>
@endsection
