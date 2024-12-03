@extends('layouts.nav')

@section('content')

<div class="flex justify-center items-center min-h-screen bg-gradient-to-tr from-purple-100 via-purple-200 to-purple-300 rounded-[20px]">
    <div class="card shadow-lg rounded-lg bg-white p-6 w-full max-w-4xl">
        <div class="card-header text-center text-2xl font-bold bg-gray-100 text-black p-2 rounded-t-lg">
            Modifier un projet
        </div>
        <div class="card-body p-6">
            <form action="{{ url('/projects/' . $project->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="flex gap-4">
              
                    <div class="w-1/2">
                        <label for="title" class="font-semibold text-lg mb-2 block text-purple-500">Titre du projet :</label>
                        <input type="text" name="title" id="title" value="{{ $project->title }}"
                            class="w-full border border-gray-300 rounded-lg focus:ring-purple-400 focus:border-purple-400 p-2 h-[42px]">
                        @error('title')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                  
                    <div class="w-1/2">
                        <label for="description" class="font-semibold text-lg mb-2 block text-purple-500">Description :</label>
                        <textarea name="description" id="description"
                            class="w-full border border-gray-300 rounded-lg focus:ring-purple-400 focus:border-purple-400 p-2 h-[42px] resize-none">{{ $project->description }}</textarea>
                        @error('description')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            
                <div class="flex gap-4">
               
                    <div class="w-1/2">
                        <label for="date" class="font-semibold text-lg mb-2 block text-purple-500">Deadline :</label>
                        <input type="date" name="deadline" id="date" value="{{ $project->deadline }}"
                            class="w-full border border-gray-300 rounded-lg focus:ring-purple-400 focus:border-purple-400 p-2 h-[42px]">
                    </div>
                
                    <div class="w-1/2">
                        <label for="status" class="font-semibold text-lg mb-2 block text-purple-500">Status :</label>
                        <select name="status" id="status"
                            class="w-full border border-gray-300 rounded-lg focus:ring-purple-400 focus:border-purple-400 p-2 h-[42px]">
                            <option value="en cours" {{ $project->status == 'en cours' ? 'selected' : '' }}>En cours</option>
                            <option value="terminé" {{ $project->status == 'terminé' ? 'selected' : '' }}>Terminé</option>
                        </select>
                        @error('status')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            
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