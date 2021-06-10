<header class="bg-white z-50 sticky top-0" x-data="{ open:false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-3 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="block lg:hidden h-16 w-auto" src="/img/logo-4.svg" alt="Workflow">
                    <img class="hidden lg:block h-20 w-auto" src="/img/logo-3.svg" alt="Workflow">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button x-on:click="open = !open" type="button"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">

                <a href="{{ route('home.index') }}" class="text-base font-medium text-gray-500 hover:text-red-900">
                    <i class="fas fa-laptop-house"></i> Home
                </a>
                <a href="{{ route('abouts.index') }}" class="text-base font-medium text-gray-500 hover:text-red-900">
                    <i class="fas fa-user-friends"></i> Sobre Nosotros</a>
                <a href="{{ route('posts.index') }}" class="text-base font-medium text-gray-500 hover:text-red-900">
                    <i class="fas fa-blog"></i> Blog</a>
                <a href="{{ route('podcasts.index') }}"
                    class="text-base font-medium text-gray-500 hover:text-red-900">
                    <i class="far fa-play-circle"></i> Podcast </a>
                <div class="relative" x-data="{ open:false }">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button type="button" x-on:click="open = !open"
                        class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        aria-expanded="false">
                        <span><i class="fas fa-microphone-alt"></i> Entrevistas</span>
                        <!--
                Heroicon name: solid/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0"
                        x-show="open" x-on:click.away="open = false">

                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/support -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Especialistas
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/support -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Influencers
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <!-- Heroicon name: outline/support -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            Casos
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                <div class="mt-5 text-sm">
                                    <a href="{{ route('interviews.index') }}"
                                        class="font-medium text-red-600 hover:text-red-500"> Ver todos las
                                        Entrevistas
                                        <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
            @auth
                <div
                    class="hidden md:flex items-center justify-end md:flex-1 lg:w-0 absolute inset-y-0 right-0 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Boton Notificaciones -->
                    <button
                        class="bg-white p-1 rounded-full text-red-600 hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-700">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open:false }">
                        <div>
                            <button x-on:click="open = !open" type="button"
                                class="bg-white flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-700"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <div x-show="open" {{-- x-on:click.away="open = false" --}}
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Ver tu perfil</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault();
                                                                                                                                                                                                                                                                        this.closest('form').submit();">
                                    Cerrar sesión</a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="{{ route('login') }}"
                        class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('register') }}"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
                        Registrarse
                    </a>
                </div>
            @endauth

        </div>
    </div>

    <div x-show="open" x-on:click.away="open = false"
        class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-14 w-auto" src="/img/logo-4.svg" alt="Workflow">
                    </div>
                    <div class="-mr-2">
                        <button x-on:click="open = !open" type="button" type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="{{ route('home.index') }}"
                            class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                <i class="fas fa-laptop-house flex-shrink-0 h-6 w-6 text-red-600"></i> Home
                            </span>
                        </a>

                        <a href="{{ route('abouts.index') }}"
                            class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                <i class="fas fa-user-friends flex-shrink-0 h-6 w-6 text-red-600"></i> Sobre Nosotros
                            </span>
                        </a>

                        <a href="{{ route('podcasts.index') }}"
                            class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                <i class="fas fa-laptop flex-shrink-0 h-6 w-6 text-red-600"></i> Podcast
                            </span>
                        </a>
                        <a href="{{ route('posts.index') }}"
                            class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                <i class="fas fa-blog flex-shrink-0 h-6 w-6 text-red-600"></i> Blog
                            </span>
                        </a>
                        <a href="{{ route('interviews.index') }}"
                            class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <span class="ml-3 text-base font-medium text-gray-900">
                                <i class="fas fa-microphone-alt flex-shrink-0 h-6 w-6 text-red-600"></i> Entrevistas
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-100">
                        Especialistas
                    </a>
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-100">
                        Influencers
                    </a>
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700 hover:bg-gray-100">
                        Casos
                    </a>
                </div>
                @auth
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <img class="col-span-2 h-11 w-11 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                            alt="">
                        <a href="{{ route('profile.show') }}"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Ver tu perfil</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                class="text-red-600 hover:text-red-800 block px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1" id="user-menu-item-2"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                    this.closest('form').submit();">
                                Cerrar sesión</a>
                        </form>
                    </div>
                @else
                    <div>
                        <a href="{{ route('login') }}"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">
                            Iniciar Sesión
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            No tiene una cuenta?
                            <a href="{{ route('register') }}" class="text-red-600 hover:text-red-500">
                                Registrarse
                            </a>
                        </p>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>
