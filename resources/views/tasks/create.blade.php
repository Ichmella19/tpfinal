@extends('layouts.nav')

@section('content')

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card text-bg-light mb-3;" style="width: 70%; height:80%">
                <div class="card-header" style="text-align: center; font-weight:bolder; font-size:40px; background-color:rgba(24, 23, 23, 0.733); color:white">Ajouter une tâche</div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div style="text-align: center">
                            <label for="title" style="font-weight:bolder; font-size:25px; margin-top:5%">Titre de la tâche :</label>
                            <input type="text" name="title" id="title" style="width: 40%;">
                            @error('title')
                                <div style="color: red">{{$message}}</div>
                            @enderror
                            <br>
                            <label for="description" style="font-weight:bolder; font-size:25px; margin-top:5%;">Description :</label>
                            <textarea name="description" id="" cols="30" rows="10" style="height: 5%; width: 43%;"></textarea>
                            <br>

                            <label for="status" style="font-weight:bolder; font-size:25px; margin-top:5%;">Status :</label>
                            <select name="status" id="status" style="margin-right: 35%">
                                <option value="non commencé">Non commencé</option>
                                <option value="en cours">En cours</option>
                                <option value="terminé">Terminé</option>
                            </select>
                            <br>
                            <label for="priority" style="font-weight:bolder; font-size:25px; margin-top:3%; margin-bottom:3%">Priorité :</label>
                            <select name="priority" id="priority" style="margin-right: 35%">
                                <option value="faible">Faible</option>
                                <option value="moyenne">Moyenne</option>
                                <option value="forte">Forte</option>
                            </select>
                            @error('priority')
                                <div style="color: red">{{$message}}</div>
                            @enderror
                            <br>
                            <select name="project_id" id="project_id" style="margin-right: 20%; width:50%">
                                @foreach ($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                @endforeach
                            </select>
                            <br>
                            <label for="assigned_to" style="font-weight:bolder; font-size:25px; margin-top:3%; margin-bottom:3%">Assignation :</label>
                            <select name="assigned_to" id="assigned_to" style="margin-right: 20%; width:50%" multiple>
                                <option value="">Non assigné</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-success" style="margin-top: 5%; margin-bottom:5%">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
