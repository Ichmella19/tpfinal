@extends('layouts.nav')

@section('content')

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green">
    <img src="{{asset('images/tick.png')}}" alt="succès">{{ session('success') }}
</div>

@endif

<div class="container mt-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-center mb-4 font-bold text-2xl">Liste des taches</h2>
    <div class="mb-3">
        <a href="{{ url('/tasks/create') }}" class="btn btn-outline-success">Ajouter une tache</a>
    </div>
    <div class="bg-white shadow-lg rounded-xl p-4">
        @php
        $i = 1
        @endphp
        <div class="overflow-x-auto">
            <table class="table table-striped table-hover w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Priorité</th>
                        <th>Projets</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->priority }}</td>
                        <td>{{ $task->project->title }}</td>
                        <td class="flex space-x-2">
                            <a href="{{ url('/tasks/' . $task->id . '/edit') }}" class="btn btn-primary w-[35%] h-10 text-white text-sm">Modifier</a>

                            <form action="{{ url('/tasks/' . $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cette tâche ?')" class="btn btn-outline-danger px-4 py-2 text-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection