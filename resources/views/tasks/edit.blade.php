@extends('layouts.nav')

@section('content')

<div class="d-flex justify-content-center align-items-center rounded-[20px] mt-[2%] bg-gradient-to-tr from-purple-100 via-purple-200 to-purple-300 " style="height: 100vh; padding-bottom: 20px;">
    <div class="card shadow-lg rounded-4" style="width: 60%; max-height: 100%; background-color: #ffffff;">
        <div class="card-header text-center fw-bold bg-gray-100" style="font-size: 1.5rem;  color: black; border-radius: 0.5rem 0.5rem 0 0;">
            Modifier une tâche
        </div>
        <div class="card-body" style="overflow-y: auto;">
            <form action="{{ url('/tasks/' . $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Groupe de champs 1 : Titre et Description -->
                <div class="row mb-4">
                    <!-- Titre -->
                    <div class="col-md-6">
                        <label for="title" class="form-label fw-bold text-muted" style="font-size: 1rem;">Titre :</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" style="border-radius: 0.5rem;">
                        @error('title')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Description -->
                    <div class="col-md-6">
                        <label for="description" class="form-label fw-bold text-muted" style="font-size: 1rem;">Description :</label>
                        <textarea name="description" id="description" class="form-control" style="height: 38px; border-radius: 0.5rem; width: 100%;">{{ $task->description }}</textarea>
                    </div>
                </div>

                <!-- Groupe de champs 2 : Statut et Priorité -->
                <div class="row mb-4">
                    <!-- Statut -->
                    <div class="col-md-6">
                        <label for="status" class="form-label fw-bold text-muted" style="font-size: 1rem;">Statut :</label>
                        <select name="status" id="status" class="form-select" style="border-radius: 0.5rem;">
                            <option value="non commencé" {{ $task->status === "non commencé" ? 'selected' : '' }}>Non commencé</option>
                            <option value="en cours" {{ $task->status === "en cours" ? 'selected' : '' }}>En cours</option>
                            <option value="terminé" {{ $task->status === "terminé" ? 'selected' : '' }}>Terminé</option>
                        </select>
                        @error('status')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Priorité -->
                    <div class="col-md-6">
                        <label for="priority" class="form-label fw-bold text-muted" style="font-size: 1rem;">Priorité :</label>
                        <select name="priority" id="priority" class="form-select" style="border-radius: 0.5rem;">
                            <option value="faible" {{ $task->priority === "faible" ? 'selected' : '' }}>Faible</option>
                            <option value="moyenne" {{ $task->priority === "moyenne" ? 'selected' : '' }}>Moyenne</option>
                            <option value="forte" {{ $task->priority === "forte" ? 'selected' : '' }}>Forte</option>
                        </select>
                        @error('priority')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Champ isolé : Projet -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="project_id" class="form-label fw-bold text-muted" style="font-size: 1rem;">Projet :</label>
                        <select name="project_id" id="project_id" class="form-select" style="border-radius: 0.5rem;">
                            @foreach ($projects as $project)
                            <option value="{{ $project->id }}" {{ $task->project_id === $project->id ? 'selected' : '' }}>
                                {{ $project->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Bouton -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-purple-600 text-white font-semibold rounded-lg px-6 py-2 hover:bg-purple-700 focus:outline-none focus:ring focus:ring-purple-300">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection