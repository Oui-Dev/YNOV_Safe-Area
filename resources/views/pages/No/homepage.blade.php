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
                        <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">Sécurisez l'environnement de travail</span>
                            <span class="block text-indigo-400">de vos collaborateurs</span>
                        </h1>
                        <p class="mx-auto mt-6 max-w-lg text-center text-xl text-white sm:max-w-3xl">Un collaborateur qui se sent bien au travail, c'est un collaborateur qui est plus productif.</p>
                        <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                            <div class="space-y-4 flex flex-col md:flex-row justify-center items-center gap-2 md:gap-8 sm:space-y-0">
                                <a href="{{route('no.public.prices')}}" class="flex items-center justify-center rounded-md border border-transparent bg-white px-8 md:px-4 py-3 text-base md:text-lg font-medium text-black shadow-sm hover:bg-indigo-50 h-full md:w-52">Voir notre solution</a>
                                <a href="#" class="rounded-md shadow-sm">
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
        <div class="relative overflow-hidden pt-16 pb-32">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
            <div class="relative">
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
                                <span class="flex h-12 w-12 items-center justify-center rounded-md bg-gradient-to-r from-safearea-red to-safearea-blue">
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

        <!-- Team section -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12">
                    <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Notre équipe</h2>
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
