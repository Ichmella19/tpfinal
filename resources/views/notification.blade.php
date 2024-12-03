@extends('layouts.nav')

@section('content')

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Vos Notifications</h1>

        @if ($notifications->isEmpty())
            <p class="text-gray-500">Vous n'avez aucune notification pour le moment.</p>
        @else
            <ul class="space-y-4">
                @foreach ($notifications as $notification)

                    <li class="bg-white p-4 rounded shadow">

                        <p class="text-sm text-gray-600">
                            Un utilisateur vous a assigné la tâche
                            <span class="font-semibold text-blue-500">
                                {{ $notification->task->title }}
                            </span>.
                        </p>
                        
                    </li>

                @endforeach
            </ul>
        @endif
    </div>

@endsection

