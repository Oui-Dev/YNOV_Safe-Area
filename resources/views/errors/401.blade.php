@extends('layouts/error')

@section('content')
    <div class="flex items-center justify-center h-screen p-8">
        <div class="md:grid md:place-items-center">
            <div class="mx-auto max-w-max">
                <main class="sm:flex">
                    <p class="text-4xl font-bold tracking-tight text-safearea-blue sm:text-5xl pr-4">401</p>
                    <div class="sm:ml-6">
                        <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Accès non autorisé</h1>
                            <p class="mt-3 text-base text-gray-500">Vous devez vous authentifier pour accéder à cette ressource</p>
                        </div>
                        <div class="mt-10 flex space-x-10 sm:border-l sm:border-transparent sm:pl-6">
                            <a href="{{route('no.public.homepage')}}" class="inline-flex items-center rounded-md border border-transparent bg-gradient-to-r text-white from-safearea-red to-safearea-blue px-4 py-2 text-sm font-medium">Retour</a>
                            <a href="{{route('login')}}" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium bg-gradient-to-r text-white from-safearea-red to-safearea-blue">Se connecter</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection