@extends('layouts.dashboard')

@section('content')
    <div class="max-w-md mx-auto">
        <h2 class="mb-4 text-2xl font-bold">Delete Fitness</h2>
        <p class="mb-4">Are you sure you want to delete this fitness?</p>
        <form action="{{ route('fitness.destroy', $fitness->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Confirm
                Delete</button>
        </form>
        <a href="{{ route('fitness.show', $fitness->id) }}"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Cancel</a>
    </div>
@endsection
