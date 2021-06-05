<nav class="bg-white z-50" x-data="{ open:false }">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
        <!-- Boton del menu movil-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button x-on:click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <!-- boton podcast-->
      <div class="flex-shrink-0 flex items-center">
          <a class="hidden sm:block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                  href="#">
              <i class="far fa-play-circle"></i>
              PODCAST
          </a>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch ">
        <!-- Logotipo-->
        <div class="justify-start flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-16 w-auto" src="/img/logo-4.svg" alt="Workflow">
            <img class="hidden lg:block h-20 w-auto" src="/img/logo-3.svg" alt="Workflow">
        </div>
      </div>

      @auth
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Boton Notificaciones -->
        <button class="bg-white p-1 rounded-full text-red-600 hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-700">
          <span class="sr-only">View notifications</span>
          <!-- Heroicon name: outline/bell -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="ml-3 relative" x-data="{ open:false }">
          <div>
            <button x-on:click="open = !open" type="button" class="bg-white flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-700" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Ver tu perfil</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                Cerrar sesión</a>
            </form>
          </div>
        </div>
      </div>

      @else
        <div >
            <a href="{{route('login')}}" class="text-black border-2 border-red-600 hover:bg-red-600 hover:text-white px-3 py-2 rounded-full text-sm font-medium">
                Iniciar Sesión</a>
            <a href="{{route('register')}}" class="text-black border-2 border-red-600 hover:bg-red-600 hover:text-white px-3 py-2 rounded-full text-sm font-medium">
                Registrarse</a>
        </div>

      @endauth


    </div>

  </div>

  <!-- Menu Celular, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-red-800 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

      <a href="#" class="text-gray-500 hover:bg-red-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

      <a href="#" class="text-gray-500 hover:bg-red-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
    </div>
  </div>


</nav>