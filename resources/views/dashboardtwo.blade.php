<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .group:hover .group-hover\:flex {
            display: flex !important;
        }
    </style>
    <title>Document</title>
</head>
<body>
<!-- Component Start -->
<div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">
    <div class="flex items-center flex-shrink-0 w-full h-16 px-10 bg-white bg-opacity-75">
        <svg class="w-8 h-8 text-indigo-600 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
        </svg>
        <input class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring" type="search" placeholder="Search for anything…">
        <div class="ml-10">
            <a class="mx-2 text-lg font-semibold text-indigo-700" href="#">Dashboard</a>
            <a class="mx-2 text-lg font-semibold text-gray-600 hover:text-indigo-700" href="#">Projects</a>
            <a class="mx-2 text-lg font-semibold text-gray-600 hover:text-indigo-700" href="#">Tasks</a>
        </div>
        <buton class="flex items-center justify-center w-8 h-8 ml-auto overflow-hidden rounded-full cursor-pointer">
            <img src="https://assets.codepen.io/5041378/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1600304177&width=512" alt="">
        </buton>
    </div>
    <div class="px-10 mt-6 flex justify-between">
        <h1 class="text-4xl font-bold">User Dashboard</h1>
           <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-red p-2 bg-red-500 text-white font-semibold text-lg rounded-full justify-center items-center hover:bg-red-800">Se déconnecter</button>
</form>
    </div>
    <div class="flex flex-grow px-10 mt-10 space-x-6 overflow-auto">
        <div class="flex flex-col flex-shrink-0 w-72">
            <div class="flex items-center flex-shrink-0 h-10 px-2">
                <span class="block text-xl font-semibold">Backlog</span>
                <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">6</span>
                <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col pb-2 overflow-auto">
                
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                   
              
               
              
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Task 1</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/46.jpg'/>
                    </div>
                </div>
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Task 2</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://uifaces.co/our-content/donated/vIqzOHXj.jpg'/>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="flex flex-col flex-shrink-0 w-72">
           
            <div class="flex flex-col pb-2 overflow-auto mb-[20%]">
                  <div class="flex items-center flex-shrink-0 h-10 px-2">
                <span class="block text-xl font-semibold">Blocks</span>
                <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">2</span>
                <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>

                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Task 1</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
                    </div>
                </div>
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Task 2</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="flex flex-col flex-shrink-0 w-72">
            <div class="flex items-center flex-shrink-0 h-10 px-2">
                <span class="block text-xl font-semibold">Doing</span>
                <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">2</span>
                <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col pb-2 overflow-auto">
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Task 1</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/26.jpg'/>
                    </div>
                </div>
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Task 2</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-shrink-0 w-72">
            <div class="flex items-center flex-shrink-0 h-10 px-2">
                <span class="block text-xl font-semibold">Review</span>
                <span class="flex items-center justify-center w-5 h-5 ml-2 text-sm font-semibold text-indigo-500 bg-white rounded bg-opacity-30">3</span>
                <button class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col pb-2 overflow-auto">
                <div class="relative flex flex-col items-start p-7 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center  w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Task 1</span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/men/64.jpg'/>
                    </div>
                </div>
                <div class="relative flex flex-col items-start p-7       mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                    <button class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                    <span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Task 2 </span>
                    <h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
                    <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">Dec 12</span>
                        </div>
                        <div class="relative flex items-center ml-4">
                            <svg class="relative w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">4</span>
                        </div>
                        <div class="flex items-center ml-4">
                            <svg class="w-4 h-4 text-gray-300 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 leading-none">1</span>
                        </div>
                        <img class="w-6 h-6 ml-auto rounded-full" src='https://randomuser.me/api/portraits/women/44.jpg'/>
                    </div>
                </div>
               
            </div>
          
        
        </div>
       