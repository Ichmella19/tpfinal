@extends('layouts.nav')

@section('content')

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card text-bg-light mb-3;" style="width: 70%; height:80%">
                <div class="card-header" style="text-align: center; font-weight:bolder; font-size:40px; background-color:rgba(24, 23, 23, 0.733); color:white">Modifier un projet</div>
                <div class="card-body">
                    <form action="{{ url('/projects/' . $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div style="text-align: center">
                            <label for="title" style="font-weight:bolder; font-size:25px; margin-top:5%">Titre du projet :</label>
                            <input type="text" name="title" id="title" value="{{ $project->title }}" style="width: 40%;">
                            @error('title')
                                <div style="color: red">{{$message}}</div>
                            @enderror
                            <br>
                            <label for="description" style="font-weight:bolder; font-size:25px; margin-top:5%;">Description :</label>
                            <textarea name="description" id="" cols="30" rows="10" style="height: 5%; width: 43%;">{{ $project->description }}</textarea>
                            @error('description')
                                <div style="color: red">{{$message}}</div>
                            @enderror
                            <br>
                            <label for="date" style="font-weight:bolder; font-size:25px; margin-top:3%">DeadLine :</label>
                            <input type="date" name="deadline" id="date" value="{{ $project->deadline }}" style="width: 48%;">

                            <br>
                            <label for="status" style="font-weight:bolder; font-size:25px; margin-top:5%;">Status :</label>
                            <select name="status" id="status" value="{{ $project->status }}" style="margin-right: 35%">
                                <option value="en cours">En cours</option>
                                <option value="terminé">Termée</option>
                            </select>
                            @error('status')
                                <div style="color: red">{{$message}}</div>
                            @enderror
                        </div>

                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-success" style="margin-top: 5%; margin-bottom:5%">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
