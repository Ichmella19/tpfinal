@extends('layouts.nav')

@section('content')
<div class="min-h-screen bg-gradient-to-tr from-purple-100 via-purple-200 to-purple-300 flex flex-col justify-start items-center rounded-[20px]">
    <div class="w-full">
        <div class="ml-[40%]">
            <h1 class="text-3xl font-bold mt-10">User Dashboard</h1>

        </div>
        <div class="mt-[20px] ml-[7%]">
            <h1 class="text-3xl font-bold">Projects lists</h1>
        </div>


        @php $i = 1; @endphp

        <div class="flex justify-center items-center flex-wrap gap-6 mt-10 px-10">
            @foreach($projects as $project)
            <div class="relative original-div flex flex-col items-start p-10 bg-white hover:transition-all scale-95 duration-400 rounded-lg shadow-md bg-opacity-90 group hover:bg-opacity-100">
                <span class="flex items-center h-7 ml-5 p-3 text-sm font-bold text-purple-600 bg-purple-300 rounded-full">Project : {{ $project->title }}</span>
                <div class="ml-5">

                    <h4 class="mt-2 text-[16px] font-bold">User-name: {{ $project->user->name }}</h4>
                </div>
                <div class="flex items-center mt-1 text-[13px] font-medium text-black ml-5">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-purple-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1 leading-none text-[16px] font-bold">{{ $project->deadline }}</span>
                    </div>
                    <div class="flex items-center ml-4">
                        <p class="font-bold text-[16px] px-2">Statut:</p>
                        @if($project->status === "en cours")
                        <span class="badge text-bg-warning"> {{ $project->status }}</span>
                        @else
                        <span class="badge text-bg-success">{{ $project->status }}</span>
                        @endif
                    </div>
                    <img class="w-6 h-6 ml-20 text-blue-600 rounded-full" src='images/la-personne.png' />
                </div>
                <a href="{{ route('projects.description',$project->id) }}" class="bg-purple-700 flex  p-2 hover:bg-purple-900 text-white mt-3 ml-5 font-semibold rounded-lg">
                    <img src="images/droite.png" alt="" class="w-5 h-5 font-bold mt-0.5">
                    Voir plus
                </a>
            </div>
            @endforeach
        </div>

        <div class="mt-16 ml-[7%]">
            <h1 class="text-3xl font-bold">Tasks lists</h1>
        </div>

        @php $i = 1; @endphp

        <div class="flex justify-center items-center flex-wrap gap-6 mt-10 px-8">
            @foreach($taches as $tache)
            <div class="relative flex flex-col items-start p-8 bg-white hover:transition-all scale-95 duration-400 rounded-lg shadow-md bg-opacity-90 group hover:bg-opacity-100">
                <span class="flex items-center h-7 ml-5 p-3 text-sm font-bold text-purple-600 bg-purple-300 rounded-full">Task :{{ $tache->title }}</span>
                <div class="ml-5">

                    <h4 class="mt-2 text-[16px] font-bold">Nom du Projet: {{ $tache->project->title }}</h4>
                </div>
                <div class="flex items-center mt-1 text-[13px] font-medium text-black ml-5">
                    <div class="flex items-center">
                        <p class="text-[16px] font-bold px-1">Priorité:</p>
                        @if($tache->priority === "faible")
                        <span class="badge text-bg-warning"> {{ $tache->priority }}</span>
                        @elseif($tache->priority === "moyenne")
                        <span class="badge text-bg-success">{{ $tache->priority }}</span>
                        @else
                        <span class="badge text-bg-info">{{ $tache->priority }}</span>
                        @endif
                    </div>
                    <div class="flex items-center ml-4">
                        <p class="text-[16px] font-bold px-1">Statut:</p>
                        @if($tache->status === "non commencé")
                        <span class="badge text-bg-danger"> {{ $tache->status }}</span>
                        @elseif($tache->status === "en cours")
                        <span class="badge text-bg-warning">{{ $tache->status }}</span>
                        @else
                        <span class="badge text-bg-success">{{ $tache->status }}</span>
                        @endif
                    </div>
                    <img class="w-6 h-6 ml-20 text-blue-600 rounded-full" src='images/la-personne.png' />
                </div>
                <a href="{{ route('tasks.description',$tache->id) }}" class="bg-purple-700 flex  p-2 hover:bg-purple-900 text-white mt-3 ml-5 font-semibold rounded-lg">
                    <img src="images/droite.png" alt="" class="w-5 h-5 font-bold mt-0.5">
                    Voir plus</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
