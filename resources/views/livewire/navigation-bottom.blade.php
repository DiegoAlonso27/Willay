<div class="bg-red-600 hidden sm:block z-10">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-center h-16">
        <div class="items-center justify-center sm:items-stretch sm:justify-start">
          <div class="hidden sm:block sm:ml-6 justify-center">
            <div class="flex space-x-4">
              <!-- Current: "bg-red-900 text-white", Default: "text-red-300 hover:bg-red-700 hover:text-white" -->
              <a href="#" class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

            {{-- dropdown-category --}}

                <div class="relative inline-block text-left" x-data="{ open:false }">
                    <div>
                    <a x-on:click="open = !open"  type="button" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium inline-flex justify-center w-full" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <i class="fas fa-blog"></i>
                        Blog
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
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
                <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        @foreach ($categories as $category)
                <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="#" class="text-black block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-0">{{$category->name}}</a>
                </div>
                      @endforeach
                    </div>
                </div>

              <a href="#" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

              <a href="#" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

              <a href="#" class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
            </div>
          </div>

        </div>

      </div>
    </div>
</div>

