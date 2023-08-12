@extends('layouts.dashboard')

@section('content')
    <div class="p-4 bg-white rounded-lg shadow-lg">
        <h1 class="mb-4 text-2xl font-bold">admin Dashboard </h1>
        <form action="{{ route('admin.post.upload') }}" method="POST">
            @csrf
            <label for="content">Post Content:</label>
            <textarea name="content" id="content" rows="4" class="w-full border"></textarea>
            <button type="submit" class="px-4 py-2 mt-2 text-white bg-blue-500 rounded-lg">Post</button>
        </form>
    </div>
@endsection
