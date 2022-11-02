<nav class="bg-white px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b">
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
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('no.public.homepage') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-black hover:border-b-2 hover:border-safearea-red">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('no.public.features') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.features') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-black hover:border-b-2 hover:border-safearea-red">Fonctionnalités</a>
                </li>
                <li>
                    <a href="{{ route('no.public.prices') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-black hover:border-b-2 hover:border-safearea-red">Tarifs</a>
                </li>
                <li>
                    <a href="{{ route('no.public.contact') }}" class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} block py-2 pr-4 pl-3 text-base font-medium text-black hover:border-b-2 hover:border-safearea-red">Contact</a>
                </li>

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Connexion</a>

                @endguest
                @auth
                    <li>
                        <a href="{{ route('my.index') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-safearea-red to-safearea-blue bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-safearea-red hover:to-safearea-blue">Mon espace</a>
                    </li>
                    <li>
                        <x-form action="{{ route('logout') }}" method="delete"
                                class="block py-2 pr-4 pl-3 text-base font-medium dark:text-red-400 white:text-red-600 hover:border-b-2 hover:border-safearea-red">
                            <button type="submit">Déconnexion</button>
                        </x-form>
                    </li>
                @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="lg:mt-10"><br></div>
