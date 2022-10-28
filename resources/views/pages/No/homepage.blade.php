@extends('layouts/no')

@section('content')
    <section class="bg-white mt-8">
        <!-- Hero section -->
        <div class="relative">
            <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                            <div class="absolute inset-0 bg-gradient-to-r from-safearea-red to-safearea-blue mix-blend-multiply"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-white">Sécurisez l'environnement de travail</span>
                                <span class="block text-indigo-200">de vos collaborateurs</span>
                            </h1>
                            <p class="mx-auto mt-6 max-w-lg text-center text-xl text-indigo-200 sm:max-w-3xl">
                                Un collaborateur qui se sent bien au travail, c'est un collaborateur qui est plus productif.
                            </p>
                            <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                                <div class="space-y-4 sm:mx-auto sm:inline-grid sm:space-y-0">
                                    <a href="{{route('no.public.features')}}" title="Voir notre solution" class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-3 text-base font-medium text-safearea-blue shadow-sm sm:px-8 hover:border-transparent hover:bg-gradient-to-r hover:text-white hover:from-safearea-red hover:to-safearea-blue">Voir notre solution</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">

                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h2 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-black">Téléchargez notre application Android</span>
                        </h2>
                        <p class="mx-auto mt-6 max-w-lg text-center text-xl text-gray-900 sm:max-w-3xl">
                            Utile, intuitive, et directe, 1 application pour tout gérer.
                        </p>
                        <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                            <div class="space-y-4 sm:mx-auto sm:inline-grid sm:space-y-0">
                                <a href="{{route('no.public.download.android')}}" title="Télécharger notre application android" class="flex items-center justify-center rounded-md border border-transparent bg-transparent px-4 py-3">
                                    <img class="rounded-lg text-center object-cover shadow-lg" style="width: 500px" src="{{Vite::asset('resources/images/google_play.png')}}" alt="Logo google play download application">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Cloud -->
        <div class="bg-gray-100">
            <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-base font-semibold text-gray-900">Ils font confiance à notre solution (et ce ne sont pas les seuls)</p>
                <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
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
{{--                        <div class="mt-8 border-t border-gray-200 pt-6">--}}
{{--                            <blockquote>--}}
{{--                            <div>--}}
{{--                                <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>--}}
{{--                            </div>--}}
{{--                            <footer class="mt-3">--}}
{{--                                <div class="flex items-center space-x-3">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>--}}
{{--                                </div>--}}
{{--                            </footer>--}}
{{--                            </blockquote>--}}
{{--                        </div>--}}
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

        <!-- Stats section -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12">
                    <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Notre équipe</h2>
                    </div>
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://media-exp1.licdn.com/dms/image/C5603AQF6fxarjIsJkA/profile-displayphoto-shrink_800_800/0/1574261571668?e=1672272000&v=beta&t=Vm5sPiudMaSPHxKcXi9XFZliJmQhHkRt5HdhuT2i48A" alt="Photo Maxime LARROZE-FRANCEZAT">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Maxime LARROZE-F.</h3>
                                        <p class="text-indigo-600">Chef de projet / Expert web & hébergement</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                            <a title="Linkedin Maxime LARROZE-F." href="https://www.linkedin.com/in/maxime-larroze-francezat-09714614b/" class="text-gray-400 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" src="{{Vite::asset('resources/images/team/kevin_blaise.webp')}}" alt="Photo Kévin Blaise">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Kévin BLAISE</h3>
                                        <p class="text-indigo-600">Superviseur / Expert web</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                             <a title="Linkedin Kévin BLAISE" href="https://www.linkedin.com/in/k%C3%A9vin-blaise/" class="text-gray-500 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" style="width: 75%" src="{{Vite::asset('resources/images/team/leo_corre.webp')}}" alt="Photo Léo CORRE">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Léo CORRE</h3>
                                        <p class="text-indigo-600">Développeur web</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                            <a title="Linkedin Léo CORRE" href="https://www.linkedin.com/in/lcorre/" class="text-gray-500 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" src="{{Vite::asset('resources/images/team/petru_oltean.webp')}}" alt="Photo Petru OLTEAN">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Petru OLTEAN</h3>
                                        <p class="text-indigo-600">Développeur web</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                            <a title="Linkedin Petru OLTEAN" href="https://www.linkedin.com/in/petru-oltean-7308a4171/" class="text-gray-500 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" src="{{Vite::asset('resources/images/team/evan_marcel.webp')}}" alt="Photo Evan MARCEL">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Evan MARCEL</h3>
                                        <p class="text-indigo-600">Développeur web</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                            <a title="Linkedin Evan MARCEL" href="https://www.linkedin.com/in/evan-marcel-178a64171/" class="text-gray-500 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Photo Jules Besson">
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Jules BESSON</h3>
                                        <p class="text-indigo-600">Développeur web</p>
                                    </div>
                                    <ul role="list" class="flex space-x-5">
                                        <li>
                                            <a title="Linkedin Jules BESSON" href="#" class="text-gray-500 hover:text-gray-900">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
