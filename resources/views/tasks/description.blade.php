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
    <div class="flex flex-col  min-h-screen bg-gradient-to-tr from-purple-200 via-purple-300 to-purple-400 justify-center items-center rounded-[20px]  ">




        <!--  <div class="flex justify-center items-center flex-wrap gap-6 mt-8 group"> -->

        <div class="relative  flex flex-col  items-start  px-2 py-5 bg-white hover:transition-all scale-95 duration-400 rounded-lg shadow-md  bg-opacity-90 group hover:bg-opacity-100 ">


            <span class="flex items-center h-7 ml-5 p-3 text-sm font-semibold text-purple-600  bg-purple-100 rounded-full ">Task : {{ $task->title }}</span>

            <div class="ml-5 ">

                <h4 class="mt-2 text-[16px] font-semibold">Nom du Projet: {{ $task->project->title }}</h4>
                <h4 class="mt-2 text-[16px] font-semibold flex flex-wrap">Description: {{ $task->description }}</h4>

            </div>
            <div class="flex items-center mt-2  font-medium text-black ml-1">
                <div class="flex items-center">
                    <p class="text-[16px] font-semibold px-3">Priorité:</p>
                    @if( $task->priority === "faible")
                    <span class="badge text-bg-warning"> {{ $task->priority }}</span>
                    @elseif($task->priority === "moyenne")
                    <span class="badge text-bg-success">{{ $task->priority }}</span>
                    @else
                    <span class="badge text-bg-info">{{ $task->priority }}</span>
                    @endif
                </div>
                <div class="flex items-center ml-4 ">

                    <p class="font-semibold text-[16px] px-3">Statut:</p>
                    @if( $task->status === "non commencé")
                    <span class="badge text-bg-danger"> {{ $task->status }}</span>
                    @elseif( $task->status === "en cours")
                    <span class="badge text-bg-warning">{{ $task->status }}</span>
                    @else
                    <span class="badge text-bg-success">{{ $task->status }}</span>
                    @endif
                </div>
                <img class="w-6 h-6 ml-20 text-blue-600 rounded-full" src="{{asset('images/la-personne.png')}}" />
            </div>
            <a href="{{ route('dashboard') }}" class="bg-red-700 flex  p-2 hover:bg-red-900 text-white mt-3 ml-5 font-semibold rounded-lg">
                <img src="{{asset('images/gauche.png')}}" alt="" class="w-5 h-5 font-bold mt-0.5">
                Retour</a>
        </div>

</body>

</html>