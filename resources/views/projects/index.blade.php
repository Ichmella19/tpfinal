@extends('layouts.nav')

@section('content')

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green">
            <img src="{{asset('images/tick.png')}}" alt="succès">{{ session('success') }}
        </div>

    @endif

    <div class="container mt-5">
        <h2 class="text-center mb-4">Liste des Projets</h2>
        <div class="mb-3">
            <a href="{{ url('/projects/create') }}" class="btn btn-outline-success">Ajouter un projet</a>
        </div>
        @php
        $i = 1
        @endphp

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                {{-- class="table-dark" style="background-color:rgba(24, 23, 23, 0.733)" --}}
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    {{-- <th>Tâches</th> --}}
                    <th>Description</th>
                    <th>Utilisateurs</th>
                    <th>Date limite</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $project->title }}</td>
                        {{-- <td>
                            @foreach($project->tasks as $task)
                                <li style="list-style: none">{{$task->title}}</li>
                            @endforeach
                        </td> --}}
                        <td>{{ $project->description }}</td>
                        <td>{{$project->user->name}}</td>
                        <td>{{ $project->deadline }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="{{ url('/projects/' . $project->id . '/edit') }}" class="btn btn-primary">Modifier</a>

                            <form action="{{ url('/projects/' . $project->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?')" class="btn btn-outline-danger" >Supprimer</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

@endsection

