<header>
    <div class="relative bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <a href="{{ route('no.public.homepage') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Accueil</a>
                <a href="{{ route('no.public.features') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Fonctionnalités</a>
                <a href="{{ route('no.public.prices') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Tarifs</a>
                <a href="{{ route('no.public.contact') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                @guest
                    <a href="{{ route('login') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Connexion</a>
                @endguest
                @auth
                    <x-form action="{{ route('logout') }}" method="delete"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        <button type="submit">Déconnexion</button>
                    </x-form>

                    <a href="{{ route('my.index') }}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Mon espace</a>
                @endauth
            </div>
        </div>

        <!--
            Mobile menu, show/hide based on mobile menu state.

            Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">
            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600" alt="Your Company">
                        </div>
                        <div class="-mr-2">
                            <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-5">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <a href="{{ route('no.public.homepage') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">Accueil</a>
                        <a href="{{ route('no.public.features') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">Fonctionnalités</a>
                        <a href="{{ route('no.public.prices') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">Tarifs</a>
                        <a href="{{ route('no.public.contact') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">Contact</a>
                    </div>
                    <div class="mt-6">
                        @guest
                            <a href="{{ route('login') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Connexion</a>
                        @endguest

                        @auth
                            <a href="{{ route('my.index') }}"
                                class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Mon
                                espace
                            </a>

                            <x-form action="{{ route('logout') }}" method="delete"
                                class="mt-4 text-center text-base font-medium text-gray-800">
                                <button type="submit">Déconnexion</button>
                            </x-form>
                        @endauth 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>