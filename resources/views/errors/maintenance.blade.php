@extends('layouts/error')

@section('content')
    <div class="flex items-center justify-center h-screen p-8">
        <div class="md:grid md:place-items-center">
            <main class="sm:flex">
                <p class="text-4xl font-bold tracking-tight text-indigo-700 sm:text-5xl">Maintenance</p>
                <div class="sm:ml-6">
                    <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Site en cours de maintenance</h1>
                        <p class="mt-1 text-base text-gray-500">Nous faisons tout notre possible pour qu'il soit a nouveau disponible</p>
                    </div>
                    <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                        <a href="{{route('no.public.homepage')}}" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white shadow-sm bg-gradient-to-r from-safearea-red to-safearea-blue">Accueil</a>
                        <a href="mailto:safearea.app@gmail.com" class="inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-safearea-blue to-safearea-red">Contacter le support par email</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection