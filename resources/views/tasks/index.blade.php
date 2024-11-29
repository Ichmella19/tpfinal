@extends('layouts.nav')

@section('content')

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green">
            <img src="{{asset('images/tick.png')}}" alt="succès">{{ session('success') }}
        </div>

    @endif

    <div class="container mt-5">
        <h2 class="text-center mb-4">Liste des Tâches</h2>
        <div class="mb-3">
            <a href="{{ url('/tasks/create') }}" class="btn btn-outline-success">Ajouter une tâche</a>
        </div>
        @php
        $i = 1
        @endphp
        <table class="table table-striped table-hover">
            <thead class="table-dark" style="background-color:rgba(24, 23, 23, 0.733)">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    {{-- <th>Tâches</th> --}}
                    {{-- <th>Utilisateurs</th> --}}
                    <th>Description</th>
                    <th>Status</th>
                    <th>Priorité</th>
                    <th>Projets</th>
                    {{-- <th>Assignation</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $task->title }}</td>
                        {{-- <td>{{$project->user->name}}</td> --}}
                        {{-- <td>
                            @foreach($project->tasks as $task)
                                <li style="list-style: none">{{$task->title}}</li>
                            @endforeach
                        </td> --}}
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->priority }}</td>
                        <td>{{ $task->project->title }}</td>
                        {{-- <td>{{ $task->user->name }}</td> --}}
                        <td>
                            <a href="{{ url('/tasks/' . $task->id . '/edit') }}" class="btn btn-primary">Modifier</a>

                            <form action="{{ url('/tasks/' . $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cette tâche ?')" class="btn btn-outline-danger" >Supprimer</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection

