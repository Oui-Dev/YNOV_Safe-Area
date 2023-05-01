@extends('layouts/no')
@section('title', '- Notre application')
@section('content')
    <div class="flex lg:items-center justify-center w-full p-4 lg:p-8 lg:flex-auto">
        <div class="flex flex-col lg:flex-row gap-8 md:gap-12 lg:gap-32 max-w-6xl lg:pb-24 h-fit">
            <div class="text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:text-left">
                <h1>
                    <span class="mt-1 block text-3xl font-bold tracking-tight md:text-4xl lg:text-5xl">
                        <span class="block text-gray-900">Téléchargez notre</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-l from-safearea-red to-safearea-blue">application Android</span>
                    </span>
                </h1>
                <p class="mt-3 text-base text-gray-500 lg:text-lg">Utile, intuitive, et directe, 1 application pour tout gérer.</p>
                <div class="mt-8 lg:mt-12 sm:mx-auto sm:max-w-lg text-center lg:mx-0 lg:text-left">
                    {{-- <a href="{{route('no.public.mobileApp.download.android')}}"
                        class="text-center font-bold text-xl block w-full bg-gradient-to-l from-safearea-red to-safearea-blue text-white p-3 rounded-xl">
                        Télécharger
                    </a> --}}
                    <div class="text-center font-bold text-xl w-full bg-gray-500 text-white p-3 rounded-xl">
                        Bientôt disponible
                    </div>
                    <p class="mt-3 lg:mt-5 text-sm text-gray-500">
                        Nous nous soucions de la protection de vos données. Lisez notre
                        <a href="{{route('no.public.termofservice')}}" class="font-medium text-gray-900 underline hover:text-safearea-red">politique de confidentialité</a>.
                    </p>
                </div>
            </div>
            <div class="mx-auto max-w-lg lg:col-span-6 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <!-- Replace by application screen -->
                    <img class="w-full rounded-lg" src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Application illustration">
                </div>
            </div>
        </div>
    </div>
@endsection
