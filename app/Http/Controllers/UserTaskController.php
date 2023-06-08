<?php

namespace App\Http\Controllers;

use App\Models\UserTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTaskController extends Controller
{

    protected $rules = [
        'title'       => 'required|max:60',
        'description' => 'max:155',
        'completed'   => 'boolean',
    ];


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        return view('role.user.tasks.index', [
            'tasks'           => UserTask::orderBy('created_at', 'asc')
                                    ->where('user_id', $user->id)
                                    ->get(),
            'tasksInComplete' => UserTask::orderBy('created_at', 'asc')
                                    ->where('user_id', $user->id)
                                    ->where('completed', '0')
                                    ->get(),
            'tasksComplete'   => UserTask::orderBy('created_at', 'asc')
                                    ->where('user_id', $user->id)
                                    ->where('completed', '1')
                                    ->get(),
        ]);
    }

    public function index_all()
    {
        $user = Auth::user();

        return view('role.user.tasks.filtered', [
            'tasks' => UserTask::orderBy('created_at', 'asc')->where('user_id', $user->id)->get(),
        ]);
    }


    public function index_incomplete()
    {
        $user = Auth::user();

        return view('role.user.tasks.filtered', [
            'tasks' => UserTask::orderBy('created_at', 'asc')->where('user_id', $user->id)->where('completed', '1')->get(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.user.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $user = Auth::user();
        $task = $request->all();
        $task['user_id'] = $user->id;
        UserTask::create($task);

        return redirect('/tasks')->with('success', 'Task created');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTask $userTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTask $userTask, $id)
    {
        $task = UserTask::query()->findOrFail($id);
        return view('role.user.tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserTask $userTask, $id)
    {
        $this->validate($request, $this->rules);

        $task = UserTask::findOrFail($id);
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->completed = $request->input('completed');
        $task->save();

        return redirect('tasks')->with('success', 'Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTask $userTask, $id)
    {
        UserTask::findOrFail($id)->delete();

        return redirect('/tasks')->with('success', 'Task Deleted');
    }
}
