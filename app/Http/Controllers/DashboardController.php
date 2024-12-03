<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
  public function index()
    {
        // Vérifie si l'utilisateur est admin
        $projects = Project::with("user")->get();
    /*   dd($projets);  */
        $taches = Task::with('user','project')->with("project")->get();
      /*   dd($taches);   */

    if (!Auth::check()) {
      dd('Utilisateur non connecté');
    }

    if (!Auth::user()->is_admin) {
     /*  dd('Utilisateur connecté mais pas admin'); */
    }
          if (!Auth::check() || !Auth::user()->is_admin) {

           return view('dashboardtwo', compact("projects", "taches"));
        }

        // Affiche le tableau de bord pour les admins
        return view('dashboard', compact("projects","taches"));


    }

}
