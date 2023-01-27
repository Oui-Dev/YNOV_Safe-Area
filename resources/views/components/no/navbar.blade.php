<header id="navbar">
    {{-- Laptop --}}
    <nav class="hidden lg:flex">
        <div class="logo-side">
            <a href="{{ route('no.public.homepage') }}" class="flex flex-row items-center gap-4 font-bold">
                <img src="{{ Vite::asset('resources/images/logo.webp') }}" class="w-10" alt="Logo">Safe Area
            </a>
        </div>

        <div class="menu-side">
            <a href="{{ route('no.public.homepage') }}"
                class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} py-3">Accueil</a>
            <a href="{{ route('no.public.prices') }}"
                class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} py-3">Tarifs</a>
            <a href="{{ route('no.public.mobileApp') }}"
                class="{{ strpos(Route::currentRouteName(), 'no.public.mobileApp') !== false ? 'border-b-2 border-safearea-red' : '' }} py-3">Application</a>
            <a href="{{ route('no.public.contact') }}"
                class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} py-3">Contact</a>
        </div>

        <div class="button-side">
            @auth
                <x-form action="{{ route('logout') }}" method="delete"
                        class="block py-2 pr-4 pl-3 text-base hover:text-safearea-red">
                    <button type="submit">Déconnexion</button>
                </x-form>
            @endauth
            <a href="{{ route('my.auth.dashboard.index') }}" class="menu-button">Mon espace</a>
        </div>
    </nav>

    {{-- Tablet and mobile --}}
    <nav class="flex lg:hidden">
        <div class="logo-side">
            <a href="{{ route('no.public.homepage') }}">
                <img src="{{ Vite::asset('resources/images/logo.webp') }}" class="w-8" alt="Logo">
            </a>
        </div>

        <div class="button-side">
            <span class="material-icons" id="sidebarToggle">menu</span>
        </div>

        <div id="sidebar" class="reduced">
            <div class="overflow-hidden shadow-lg rounded-b-lg border-t border-lockanda-gray">
                <div class="relative grid gap-2 px-5 py-5 text-sm md:text-base">
                    <a href="{{ route('no.public.homepage') }}"
                        class="{{ strpos(Route::currentRouteName(), 'no.public.homepage') !== false ? 'border-b-2 border-safearea-red' : '' }} w-fit py-2">Accueil</a>
                    <a href="{{ route('no.public.prices') }}"
                        class="{{ strpos(Route::currentRouteName(), 'no.public.prices') !== false ? 'border-b-2 border-safearea-red' : '' }} w-fit py-2">Tarifs</a>
                    <a href="{{ route('no.public.mobileApp') }}"
                        class="{{ strpos(Route::currentRouteName(), 'no.public.mobileApp') !== false ? 'border-b-2 border-safearea-red' : '' }} w-fit py-2">Application</a>
                    <a href="{{ route('no.public.contact') }}"
                        class="{{ strpos(Route::currentRouteName(), 'no.public.contact') !== false ? 'border-b-2 border-safearea-red' : '' }} w-fit py-2">Contact</a>
                </div>
                <div class="px-5 pb-5 flex justify-around gap-5">
                    @auth
                        <x-form action="{{ route('logout') }}" method="delete"
                                class="block py-2 pr-4 pl-3 w-full text-center text-base">
                            <button type="submit" class="bg-gradient-to-r from-safearea-red to-safearea-blue bg-clip-text text-transparent">Déconnexion</button>
                        </x-form>
                    @endauth
                    <a href="{{ route('my.auth.dashboard.index') }}" class="menu-button w-full">Mon espace</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.getElementById('navbar');
        const sidebar = document.getElementById('sidebar');

        setNavbarDisplay();
        window.onscroll = () => { setNavbarDisplay(); };

        function setNavbarDisplay() {
            let y = 1 + (window.scrollY || window.pageYOffset) / 35;
            y = y < 1 ? 1 : y; // ensure y is always >= 1 (due to Safari's elastic scroll)
            let color = `rgb(${255/y}, ${255/y}, ${255/y})`;
            navbar.style.backgroundColor = color;
            sidebar.style.backgroundColor = color;

            if (window.scrollY > 10) {
                navbar.classList.add('dark');
            } else {
                navbar.classList.remove('dark');
            }
        }

        const burger = navbar.querySelector('#sidebarToggle');
        burger.addEventListener('click', () => {
            sidebar.classList.toggle('reduced');
            burger.innerHTML === "menu" ? burger.innerHTML = 'close' : burger.innerHTML = 'menu';
        });
    }, false);
</script>