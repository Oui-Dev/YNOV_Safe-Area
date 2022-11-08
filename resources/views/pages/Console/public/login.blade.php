@extends('pages.Console.index')
@section('title', '- Connexion Safe Admin')
@section('content')
    <section class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight dark:text-gray-100 white:text-gray-900">Safe Admin</h2>
            <p class="mt-2 text-center text-sm dark:text-gray-100 white:text-gray-900">
                <span class="font-medium dark:text-gray-100 white:text-gray-900">Connexion à la console de gestion</span>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="dark:bg-gray-700 white:bg-gray-200 py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <x-form class="space-y-6" action="{{route('console.public.login')}}" method="POST">
                    <div>
                        <label for="identifiant" class="block text-sm font-medium dark:text-gray-100 white:text-gray-900">Identifiant</label>
                        <div class="mt-1">
                            <input id="identifiant" name="identifiant" autocomplete="identifiant" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium dark:text-gray-100 white:text-gray-900">Mot de passe</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm sm:text-sm" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember-me" class="ml-2 block text-sm dark:text-gray-100 white:text-gray-900">Se souvenir de moi</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium dark:text-indigo-200 white:text-indigo-800 hover:text-indigo-500">Mot de passe oublié</a>
                        </div>
                    </div>

                    <div class="mt-4 text-safearea-red dark:text-red-200 white:text-red-800">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-gradient-to-r from-safearea-red to-safearea-blue py-2 px-4 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Connexion</button>
                    </div>
                </x-form>
            </div>
        </div>
    </section>
@endsection
