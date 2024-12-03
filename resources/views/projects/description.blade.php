<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="flex flex-col min-h-screen bg-gradient-to-tr from-purple-200 via-purple-300 to-purple-400 justify-center items-center rounded-[20px]">

        <div class="relative flex flex-col items-start  max-h-screen p-5 bg-white hover:transition-all scale-95 duration-400 rounded-lg shadow-md bg-opacity-90 group hover:bg-opacity-100">
            <span class="flex items-center h-7 ml-5 p-3 text-sm font-semibold text-purple-600 bg-purple-100 rounded-full">
                Project : {{ $project->title }}
            </span>

            <div class="ml-5">
                <h4 class="mt-2 text-[16px] font-semibold flex">Description: {{ $project->description }}</h4>




                <h4 class="mt-2 text-[16px] font-semibold">User-name: {{ $project->user->name }}</h4>
            </div>

            <div class="flex items-center mt-1 text-[13px] font-medium text-black ml-5">
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-purple-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-1 leading-none text-[16px] font-semibold">{{ $project->deadline }}</span>
                </div>
                <div class="flex items-center ml-4">
                    <p class="font-semibold text-[16px]  px-3">Statut:</p>
                    @if( $project->status === "en cours")
                    <span class="badge text-bg-warning"> {{ $project->status }}</span>
                    @else
                    <span class="badge text-bg-success">{{ $project->status }}</span>
                    @endif
                </div>
                <img class="w-6 h-6 ml-20 text-blue-600 rounded-full" src="{{asset('images/la-personne.png')}}" alt="user">
            </div>
            <a href="{{ route('dashboard') }}" class="bg-red-700 flex  p-2 hover:bg-red-900 text-white mt-3 ml-5 font-semibold rounded-lg">
                <img src="{{asset('images/gauche.png')}}" alt="" class="w-5 h-5 font-bold mt-0.5">
                Retour</a>
        </div>

</body>

</html>

<style>
    .description-text {
        word-wrap: break-word;
       
        overflow-wrap: break-word;
      
        white-space: normal;
      
        display: block;
      
        max-width: 100%;
     
    }
</style>