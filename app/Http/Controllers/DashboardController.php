<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
class DashboardController extends Controller
{
  public function index()
    {
        // Vérifie si l'utilisateur est admin
            
            if (!Auth::check() || !Auth::user()->is_admin) {
                
            return view('dashboardtwo');
        }

        // Affiche le tableau de bord pour les admins
        return view('dashboard');
    }

}
