@extends('layouts.nav')

@section('content')

<div class="flex flex-col min-h-screen bg-gradient-to-tr from-purple-100 via-purple-200 to-purple-300 justify-center items-center rounded-[20px]">
    <div class="card shadow-lg w-full sm:w-4/5 md:w-3/5 lg:w-3/5 p-6 bg-white rounded-lg">
        <div class="card-header text-center bg-gray-200 font-bold text-lg text-black rounded-md p-3">
            Ajouter une tâche
        </div>
        <div class="w-full mt-4">
            <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Titre et description -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label for="title" class="block text-purple-500 font-bold text-sm mb-1">Titre du projet:</label>
                        <input type="text" name="title" id="title" class="w-full px-3 py-2 border border-purple-400 rounded-md focus:outline-none focus:ring focus:ring-purple-300">
                        @error('title')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="description" class="block text-purple-500 font-bold text-sm mb-1">Description :</label>
                        <input type="text" name="description" id="description" class="w-full px-3 py-2 border border-purple-400 rounded-md focus:outline-none focus:ring focus:ring-purple-300">
                        @error('description')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Statut et priorité -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="w-full">
                        <label for="status" class="block text-purple-500 font-bold text-sm mb-1">Statut :</label>
                        <select name="status" id="status" class="w-full px-3 py-2 border border-purple-400 rounded-md focus:outline-none focus:ring focus:ring-purple-300">
                            <option value="non commencé">Non commencé</option>
                            <option value="en cours">En cours</option>
                            <option value="terminé">Terminé</option>
                        </select>
                        @error('status')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="priority" class="block text-purple-500 font-bold text-sm mb-1">Priorité :</label>
                        <select name="priority" id="priority" class="w-full px-3 py-2 border border-purple-400 rounded-md focus:outline-none focus:ring focus:ring-purple-300">
                            <option value="faible">Faible</option>
                            <option value="moyenne">Moyenne</option>
                            <option value="forte">Forte</option>
                        </select>
                        @error('priority')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Projet et assignation -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="w-[210%]">
                        <label for="project_id" class="block text-purple-500 font-bold text-sm mb-1">Projet associé :</label>
                        <select name="project_id" id="project_id" class="w-full px-3 py-2 border border-purple-400 rounded-md focus:outline-none focus:ring focus:ring-purple-300">
                            @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <!-- Bouton d'enregistrement -->
                <div class="text-center">
                    <button type="submit" class="px-6 py-2 bg-purple-500 text-white font-semibold rounded-md hover:bg-purple-600 focus:outline-none focus:ring focus:ring-purple-300">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
