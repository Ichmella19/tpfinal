<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        if(Auth::user()->is_admin){
            $tasks = Task::with('project')->get();
        }
        else{
            $tasks = Task::with('project')->where('id', Auth::user()->id)->get();
        }

        //$tasks = Task::with('project')->get();
        // $tasks = Task::with(['project', 'assignedTo'])->where('created_by', Auth::user()->id)->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {

        // $users = User::all();
        // Auth::user()->id;
        // $assignableUsers = $users->except(Auth::user()->id);
        $users = User::where('id', '!=', Auth::user()->id)
                 ->where('is_admin', false)
                 ->get();
        if(Auth::user()->is_admin){
            $projects = Project::all();
        }
        else{
            $projects = Project::where('id', Auth::user()->id)->get();
        }
        //$projects = Project::all();
        return view('tasks.create', compact('projects','users'));
    }

    public function store(Request $request)
    {
        // $user = $request->user()->id;
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:non commencé,en cours,terminé',
            'priority' => 'required|in:faible,moyenne,forte',
            'project_id' => 'required|numeric',
            'assigned_to' => 'nullable|numeric'
        ]);

        $validated['created_by'] = Auth::id();

        $task = Task::create($validated);

        Notification::create([
            'task_id'=>$task->id,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->route('tasks.index')->with('success', 'La tâche a été créé avec succès.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'priority' => 'required|string',
            'project_id' => 'required|numeric'
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'La tâche a été modifiée avec succès.');

    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
    public function description(Request $request, $id)
    {
        /*  $projects = Project::all(); */
        $task = Task::findOrFail($id);
        return view('tasks.description', compact('task'));
    }


}
