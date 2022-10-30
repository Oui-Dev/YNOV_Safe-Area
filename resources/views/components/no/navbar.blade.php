{{--<header class="sticky top-0 bg-white z-10">--}}
{{--    <navbar class="w-full">--}}
{{--        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">--}}
{{--            <div class="flex justify-start lg:w-0 lg:flex-1">--}}
{{--                <a href="{{ route('no.public.homepage') }}">--}}
{{--                    <span class="sr-only">Safe Area</span>--}}
{{--                    <img class="h-8 w-auto sm:h-10" src="{{Vite::asset('resources/images/logo.webp')}}" alt="Safe Area">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="-my-2 -mr-2 md:hidden">--}}
{{--                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-900 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-safearea-blue" aria-expanded="false">--}}
{{--                    <span class="sr-only">Open menu</span>--}}
{{--                    <!-- Heroicon name: outline/bars-3 -->--}}
{{--                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <nav class="hidden space-x-10 md:flex">--}}
{{--                <a href="{{ route('no.public.homepage') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:border-b-2 hover:border-safearea-red">Accueil</a>--}}
{{--                <a href="{{ route('no.public.features') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.features') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:border-b-2 hover:border-safearea-red">Fonctionnalités</a>--}}
{{--                <a href="{{ route('no.public.prices') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:border-b-2 hover:border-safearea-red">Tarifs</a>--}}
{{--                <a href="{{ route('no.public.contact') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:border-b-2 hover:border-safearea-red">Contact</a>--}}
{{--            </nav>--}}
{{--            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">--}}
{{--                @guest--}}
{{--                    <a href="{{ route('login') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-blue hover:to-safearea-red">Connexion</a>--}}
{{--                @endguest--}}
{{--                @auth--}}
{{--                    <x-form action="{{ route('logout') }}" method="delete"--}}
{{--                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">--}}
{{--                        <button type="submit">Déconnexion</button>--}}
{{--                    </x-form>--}}

{{--                    <a href="{{ route('my.index') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Mon espace</a>--}}
{{--                @endauth--}}

{{--                    <div class="flex space-x-6 md:order-2 md:ml-6">--}}
{{--                        <a href="https://www.linkedin.com/company/safe-area-app/" target="_blank" class="text-gray-500 hover:text-safearea-red">--}}
{{--                            <span class="sr-only">Linkedin</span>--}}
{{--                            <svg class="h-6 w-6" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">--}}
{{--                                <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}

{{--                        <a href="https://twitter.com/SafeAreaOff" target="_blank" class="text-gray-500 hover:text-safearea-blue">--}}
{{--                            <span class="sr-only">Twitter</span>--}}
{{--                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">--}}
{{--                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!----}}
{{--            Mobile menu, show/hide based on mobile menu state.--}}

{{--            Entering: "duration-200 ease-out"--}}
{{--            From: "opacity-0 scale-95"--}}
{{--            To: "opacity-100 scale-100"--}}
{{--            Leaving: "duration-100 ease-in"--}}
{{--            From: "opacity-100 scale-100"--}}
{{--            To: "opacity-0 scale-95"--}}
{{--        -->--}}
{{--        <div class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">--}}
{{--            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">--}}
{{--                <div class="px-5 pt-5 pb-6">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <div>--}}
{{--                            <img class="h-8 w-auto" src="{{Vite::asset('resources/images/logo.webp')}}" alt="Safe Area">--}}
{{--                        </div>--}}
{{--                        <div class="-mr-2">--}}
{{--                            <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-safearea-blue">--}}
{{--                                <span class="sr-only">Close menu</span>--}}
{{--                                <!-- Heroicon name: outline/x-mark -->--}}
{{--                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="py-6 px-5">--}}
{{--                    <div class="grid grid-cols-2 gap-4 text-center">--}}
{{--                        <a href="{{ route('no.public.homepage') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:text-gray-700">Accueil</a>--}}
{{--                        <a href="{{ route('no.public.features') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.features') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:text-gray-700">Fonctionnalités</a>--}}
{{--                        <a href="{{ route('no.public.prices') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:text-gray-700">Tarifs</a>--}}
{{--                        <a href="{{ route('no.public.contact') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} pb-2 text-base font-medium text-gray-900 hover:text-gray-700">Contact</a>--}}
{{--                    </div>--}}
{{--                    <div class="mt-6">--}}
{{--                        @guest--}}
{{--                            <a href="{{ route('login') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Connexion</a>--}}
{{--                        @endguest--}}

{{--                        @auth--}}
{{--                            <a href="{{ route('my.index') }}"--}}
{{--                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Mon--}}
{{--                                espace--}}
{{--                            </a>--}}

{{--                            <x-form action="{{ route('logout') }}" method="delete"--}}
{{--                                class="mt-4 text-center text-base font-medium text-gray-800">--}}
{{--                                <button type="submit">Déconnexion</button>--}}
{{--                            </x-form>--}}
{{--                        @endauth--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </navbar>--}}
{{--</header>--}}



<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b dark:border-gray-600">
    <div class="container flex flex-wrap justify-between items-center mx-auto max-w-7xl lg:px-8">
        <a href="{{ route('no.public.homepage') }}" class="flex items-center">
            <span class="sr-only">Safe Area</span>
            <img class="mr-3 h-6 sm:h-9" src="{{Vite::asset('resources/images/logo.webp')}}" alt="Safe Area Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Safe Area</span>
        </a>
        <div class="flex md:order-2">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Ouvrir le menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('no.public.homepage') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-white hover:border-b-2 hover:border-safearea-red">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('no.public.features') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.features') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-white hover:border-b-2 hover:border-safearea-red">Fonctionnalités</a>
                </li>
                <li>
                    <a href="{{ route('no.public.prices') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-white hover:border-b-2 hover:border-safearea-red">Tarifs</a>
                </li>
                <li>
                    <a href="{{ route('no.public.contact') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-white hover:border-b-2 hover:border-safearea-red">Contact</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="mt-12"><br></div>
