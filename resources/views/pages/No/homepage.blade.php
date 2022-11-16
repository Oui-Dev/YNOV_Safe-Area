@extends('layouts/no')
@section('title', '')
@section('content')
    <section class="bg-white mt-8">
        <!-- Hero section -->
        <div class="relative">
            <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                        <div class="absolute inset-0 bg-gradient-to-r from-safearea-red to-safearea-blue mix-blend-multiply"></div>
                    </div>
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center tracking-tight">
                            <span class="block text-white">Sécurisez l'environnement de travail</span>
                            <span class="block text-indigo-400">de vos collaborateurs</span>
                        </h1>
                        <p class="mx-auto mt-6 max-w-lg text-center text-xl text-white sm:max-w-3xl">Un collaborateur qui se sent bien au travail, c'est un collaborateur qui est plus productif.</p>
                        <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                            <div class="space-y-4 flex flex-col md:flex-row justify-center items-center gap-2 md:gap-8 sm:space-y-0">
                                <a href="{{route('no.public.prices')}}" class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 md:px-4 py-3 text-base md:text-lg font-medium text-black shadow-sm hover:bg-indigo-50 h-full md:w-52">Voir notre solution</a>
                                <a href="{{ route('no.public.mobileApp') }}" class="rounded-md shadow-sm">
                                    <img src="{{Vite::asset('resources/images/google_play.png')}}" alt="Logo google play download application" class="text-center object-cover shadow-lg w-52">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <!-- Partners section -->
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-lg font-semibold text-gray-700">Ils font confiance à notre solution (et ce ne sont pas les seuls)</p>
                <div class="mt-8 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                        <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                    </div>
                    <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                        <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                    </div>
                    <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                        <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                    </div>
                </div>
            </div>
        </div>

        <!-- Alternating Feature Sections -->
        <div class="relative overflow-hidden pt-10 pb-32">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
            <div class="relative">
                <h2 class="text-center mb-20">Pourquoi Safe Area ?</h2>
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0">
                        <div>
                            <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-gradient-to-r from-safearea-red to-safearea-blue">
                                    <!-- Heroicon name: outline/inbox -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Remontée des informations</h2>
                                <p class="mt-4 text-lg text-gray-900">
                                    Faire remonter les informations, vite, simplement et à la bonne personne. C'est ce que vous propose notre solution. <br><br>
                                    Une informations bien traitées, c'est une information qui est bien utilisée, et donc un collaborateur qui est plus productif.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="-mr-48 pl-4 sm:pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg" alt="Inbox user interface">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                        <div>
                            <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-gradient-to-l from-safearea-red to-safearea-blue">
                                    <!-- Heroicon name: outline/sparkles -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-6">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Traitement des données</h2>
                                <p class="mt-4 text-lg text-gray-900">
                                    Notre solution vous permet de controller, analyser et traiter les données de vos collaborateurs. <br>
                                    Vous pouvez ainsi avoir une vision globale du comportement de votre entreprise, et ainsi prendre les bonnes décisions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
                        <div class="-ml-48 pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bloc features -->
        <div class="relative overflow-hidden bg-gradient-to-b from-safearea-red to-safearea-blue mt-8">
            <div class="mx-auto max-w-7xl p-4 md:p-6 lg:p-8">
                <!-- Decorative angle backgrounds -->
                <div class="pointer-events-none absolute inset-0 sm:hidden" aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 sm:block lg:hidden" aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="pointer-events-none absolute top-0 right-0 bottom-0 hidden w-1/2 lg:block" aria-hidden="true">
                    <svg class="absolute inset-0 h-full w-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                        <defs>
                            <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <!-- End decorative angle backgrounds -->
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Solution SAAS</h3>
                                    <p class="mt-2 text-base text-purple-200">Solution disponible partout dans le monde, pas de serveur à entretenir, prêt à être utilisée</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Flexible</h3>
                                    <p class="mt-2 text-base text-purple-200">Notre solution est 100% flexible et s'adapte à toute les entreprises, de toutes les tailles</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Protection</h3>
                                    <p class="mt-2 text-base text-purple-200">Eprouvée et toujours mise à jour, notre solution protège vos données avec les meilleurs outils, pour votre plus grande sécurité</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Respect RGPD</h3>
                                    <p class="mt-2 text-base text-purple-200">Développée en France en accord avec la CNIL et les différentes réglementations, notre solution vous garanties le respect de vos données</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Notifications</h3>
                                    <p class="mt-2 text-base text-purple-200">Personnalisez vos notifications pour être avertit de l'essentiel, sans perdre de temps</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Gestion des collaborateurs</h3>
                                    <p class="mt-2 text-base text-purple-200">Gestion simple et intuitive de vos collaborateurs, simple et efficace. Export/Import disponible sur le plan Entreprise</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Dépôt de plaintes simplifié</h3>
                                    <p class="mt-2 text-base text-purple-200">Déposez une plainte, une demande au service concerné de manière ultra simplifiée et épuré</p>
                                </div>
                            </div>
        
                            <div>
                                <div>
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </span>
                                </div>
                                <div class="mt-6">
                                    <h3 class="text-lg font-medium text-white">Rapports</h3>
                                    <p class="mt-2 text-base text-purple-200">Analysez les données d'un simple coup d'oeuil, recevez des aides personnalisées</p>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team section -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12">
                    <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                        <h2 class="text-center py-4">Notre équipe</h2>
                    </div>
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                        <x-team-card name="Maxime LARROZE-F."
                            role="Chef de projet / Expert web & hébergement"
                            img="resources/images/team/maxime_larroze.webp"
                            linkedin="https://www.linkedin.com/in/maxime-larroze-francezat-09714614b/"/>
                        <x-team-card name="Kévin BLAISE"
                            role="Superviseur / Expert web"
                            img="resources/images/team/kevin_blaise.webp"
                            linkedin="https://www.linkedin.com/in/k%C3%A9vin-blaise/"/>
                        <x-team-card name="Léo CORRE"
                            role="Développeur web"
                            img="resources/images/team/leo_corre.webp"
                            linkedin="https://www.linkedin.com/in/lcorre/"/>
                        <x-team-card name="Petru OLTEAN"
                            role="Développeur web"
                            img="resources/images/team/petru_oltean.webp"
                            linkedin="https://www.linkedin.com/in/petru-oltean-7308a4171/"/>
                        <x-team-card name="Evan MARCEL"
                            role="Développeur web"
                            img="resources/images/team/evan_marcel.webp"
                            linkedin="https://www.linkedin.com/in/evan-marcel-178a64171/"/>
                        <x-team-card name="Jules Besson"
                            role="Développeur web"
                            img="resources/images/team/evan_marcel.webp"
                            linkedin="#"/>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
