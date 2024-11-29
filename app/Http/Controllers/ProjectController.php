<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {

    //     if (auth()->user()->is_admin) {
    //         // Récupérer tous les projets


    // $projects = Project::all();
    //     }
    //     }


    // else {
    //         // Récupérer uniquement les projets de l'utilisateur connecté


    // $projects = auth()->user()->projects;
    //     }


    //     }


    // // Retourner la vue avec les projets

    //     retu
    // return view('projects.index', compact('projects'));
    // }

    // }
        $projects = Project::all();
        return view('projects.index', compact('projects'));

    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {

        // $user = $request->user()->id;
        $dataValidate=$request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'nullable|date',
            'status' => 'required|in:en cours,terminé'
        ]);

        $dataValidate['user_id'] = Auth::id();



        // $all = $request->all();

        // $all['user_id'] = $user;




        Project::create($dataValidate);

        return redirect()->route('projects.index')->with('success', 'Le projet a été créé avec succès.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Le projet a été créé modifié avec succès.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Le projet a été créé supprimé avec succès.');
    }


}
