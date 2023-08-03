@extends('layouts.dashboard')

@section('content')
    <h3 class="text-gray-700 text-3xl font-medium">Update Task</h3>
    <div class="mt-8">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-semibold mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-semibold mb-2">Description</label>
                <textarea name="description" id="description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>{{ $task->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="due_date" class="block text-gray-700 text-sm font-semibold mb-2">Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">Update Task</button>
            </div>
        </form>
    </div>
@endsection
