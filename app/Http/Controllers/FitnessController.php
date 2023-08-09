<?php

namespace App\Http\Controllers;

use App\Models\Fitness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        // Add any specific data you want to pass to the view
        $data = [
            'user' => $user,
            // Add other data here
        ];
        $fitnessData = Fitness::all();
        return view('user.fitness.index', $data, ['fitnessData' => $fitnessData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.fitness.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fitness = new Fitness;
        $fitness->name = $request->input('name');
        $fitness->description = $request->input('description');
        $fitness->duration = $request->input('duration');
        $fitness->calories_burned = $request->input('calories_burned');
        $fitness->save();
        return redirect()->route('user.fitness')->with('success', 'Fit created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fitness = Fitness::find($id);
        return view('user.fitness.show', ['fitness' => $fitness]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fitness = Fitness::find($id);
        return view('user.fitness.edit', ['fitness' => $fitness]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fitness = Fitness::find($id);
        $fitness->name = $request->input('name');
        $fitness->description = $request->input('description');
        $fitness->duration = $request->input('duration');
        $fitness->calories_burned = $request->input('calories_burned');
        $fitness->save();
        return redirect()->route('user.fitness.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fitness = Fitness::find($id);
        $fitness->delete();
        return redirect()->route('user.fitness.index')->with('success', 'Task updated successfully!');
    }
}
