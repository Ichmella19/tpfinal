<x-app-layout>

    @section('content')

        <div class="py-10" style="background-color: rgb(218, 216, 216); ">

            <div class="max-w-5xl ml-1 sm:px-6 lg:px-8 space-x-6">

                <div class="w-2/3 shadow space-y-4 ">

                    <div class="bg-white shadow sm:rounded-lg p-6">
                        <button onclick="showSection('profile')" class="w-full flex items-center justify-between text-left text-gray-800 hover:text-green-600">
                            <span>Modifier le Profil</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>

                    <div class="bg-white shadow sm:rounded-lg p-6" >
                        <button onclick="showSection('password')" class="w-full flex items-center justify-between text-left text-gray-800 hover:text-green-600">
                            <span>Réinitialiser le Mot de Passe</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>

                    <div class="bg-white shadow sm:rounded-lg p-6">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                class="w-full flex items-center justify-between text-left text-gray-800 hover:text-green-600"
                            >
                                <span>Déconnection</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <div class="bg-white shadow sm:rounded-lg p-6">
                        <div x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >
                            <button class="w-full flex items-center justify-between text-left text-gray-800 hover:text-green-600">
                                <span>Supprimer le Compte</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                    </div>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Êtes vous sûr de vouloir supprimer ce compte ?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Une fois ce compte supprimé, toutes vos informations disparaîtront. Entrez votre mot de passe pour confirmer la suppression de votre compte.') }}
                            </p>

                            <div class="mt-6">
                                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1 block w-3/4"
                                    placeholder="{{ __('Mot de passe') }}"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Annuler') }}
                                </x-secondary-button>

                                <x-danger-button class="ms-3">
                                    {{ __('Supprimer') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>

                    <div id="profile-section" class="hidden">
                        <div class="bg-white shadow sm:rounded-lg p-6">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div id="password-section" class="hidden">
                        <div class="bg-white shadow sm:rounded-lg p-6">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div id="delete-section" class="hidden">
                        <div class="bg-white shadow sm:rounded-lg p-6">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-1/3 bg-gray-100 p-6 rounded-lg shadow flex flex-col items-center">
                <!-- Contenu de la carte -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/la-personne.png') }}" alt="Photo de profil" class="w-24 h-24 rounded-full shadow">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">{{ Auth::user()->name }}</h3>
                    <p class="text-gray-500">{{ Auth::user()->email }}</p>
                </div>
            </div>


        </div>

        <script>
            function showSection(section) {
                document.querySelectorAll('#profile-section, #password-section, #delete-section').forEach(el => {
                    el.classList.add('hidden');
                });
                document.getElementById(`${section}-section`).classList.remove('hidden');
            }
        </script>
    @endsection

</x-app-layout>
