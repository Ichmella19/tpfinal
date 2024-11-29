<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('project')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $users = User::all();
        $projects = Project::all();
        return view('tasks.create', compact('projects','users'));
    }

    public function store(Request $request)
    {
        // $user = $request->user()->id;
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:non commencé,en cours,terminé',
            'priority' => 'required|in:faible,moyenne,forte',
            'project_id' => 'required|numeric',
            'assigned_to' => 'nullable|exists:users,id'
        ]);

        // $all = $request->all();

        // $all['user_id'] = $user;




        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'La tâche a été créé avec succès.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        // if($task){
        //     return self::doapi(true, "succès", $task, 200);
        // }
        // else{
        //     return self::doapi(false, " la tâche nest pas retrouvé ", $article, 404);
        // }
        //return self::doapi(true, "", $task, 200);
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',

        // ]);

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'status' => 'required|string',
        //     'priority' => 'required|string',
        //     'project_id' => 'required|numeric'
        // ]);

        // // if ($validator->fails()) {
        // //     return response()->json(["message" => $validator->getMessageBag()->first()], 400);
        // // }

        // $task = Task::findOrFail($id);
        // $task->update($request->all());
        // return redirect()->route('tasks.index');
        // //return self::doapi(true, "votre article a ete modifie avec succès", $task, 200);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string',
            'priority' => 'required|string',
            'project_id' => 'required|numeric'
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'La tâche a été modifié avec succès.');

    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
        //return self::doapi(true, "votre article a été supprimé avec succès", $task, 200);
    }
}
