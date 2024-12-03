<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
/* Route::get('/dashboardtwo',[ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboardtwo');
 */Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

Route::get('/projects', [ProjectController::class, 'index'])->name("projects.index");

Route::get('/projects/create', [ProjectController::class, 'create']);

Route::post('/projects', [ProjectController::class, 'store'])->name("projects.store");

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']);

Route::put('/projects/{id}', [ProjectController::class, 'update']);

Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/projects/description/{id}', [ProjectController::class, 'description'])->name("projects.description");


Route::get('/tasks', [TaskController::class, 'index'])->name("tasks.index");

Route::get('/tasks/create', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store'])->name("tasks.store");

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::get('/tasks/description/{id}', [TaskController::class, 'description'])->name("tasks.description");
Route::get('/projects/description/{id}', [ProjectController::class, 'description'])->name("projects.description");

