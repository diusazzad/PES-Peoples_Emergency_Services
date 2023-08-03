<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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
        $tasks = Task::where('user_id', auth()->user()->id)->get();

        return view('user.tasks.index', $data, compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        // Create a new task and associate it with the currently authenticated user
        $task = new Task([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
        ]);

        // Save the task and associate it with the user
        Auth::user()->tasks()->save($task);

        // Redirect back to the task list with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('user.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // Check if the task belongs to the currently authenticated user
        if (Auth::user()->id !== $task->user_id) {
            abort(403, 'Unauthorized action.');
        }

        // Show the edit form for the task
        return view('user.tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('user.tasks.index')->with('success', 'Task updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Check if the task belongs to the currently authenticated user
        if (Auth::user()->id !== $task->user_id) {
            abort(403, 'Unauthorized action.');
        }

        // Delete the task
        $task->delete();

        // Redirect back to the task list with a success message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');

    }
}
