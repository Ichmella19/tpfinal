@extends('layouts.nav')

@section('content')
<div class="justify-content-center align-items-center px-4 sm:px-6 lg:px-8">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: green">
        <img src="{{ asset('images/tick.png') }}" alt="succès">{{ session('success') }}
    </div>
    @endif

    <div class="container mt-5">
        <h2 class="text-center mb-4 font-bold text-2xl mt-5">Liste des Projets</h2>
        <div class="mb-3">
            <a href="{{ url('/projects/create') }}" class="btn btn-outline-success">Ajouter un projet</a>
        </div>
        <div class="bg-white shadow-lg rounded-xl p-6">
            @php
            $i = 1
            @endphp
            <div class="overflow-x-auto">
                <table class="table table-striped table-hover w-full">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Description</th>
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
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->deadline }}</td>
                            <td>{{ $project->status }}</td>
                            <td class="flex space-x-2">
                                <a href="{{ url('/projects/' . $project->id . '/edit') }}" class="btn btn-primary w-[35%] h-10 text-white text-sm">Modifier</a>

                                <form action="{{ url('/projects/' . $project->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?')" class="btn btn-outline-danger px-4 py-2 text-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
