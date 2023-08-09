@extends('layouts.dashboard')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Calories Burned</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fitnessData as $fitness)
                <tr>
                    <td>{{ $fitness->name }}</td>
                    <td>{{ $fitness->description }}</td>
                    <td>{{ $fitness->duration }}</td>
                    <td>{{ $fitness->calories_burned }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($fitnessData as $fitness)
        <form action="{{ route('fitness.update', $fitness->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $fitness->name }}">
            <input type="text" name="description" value="{{ $fitness->description }}">
            <input type="number" name="duration" value="{{ $fitness->duration }}">
            <input type="number" name="calories_burned" value="{{ $fitness->calories_burned }}">
            <button type="submit">Save</button>
        </form>
    @endforeach
@endsection
