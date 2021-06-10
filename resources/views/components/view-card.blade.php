<div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center"
    style="background-image: url('{{ $img }}')">
    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full w-full">
        <div class="px-10">
            <h4
                class="text-2xl hover:text-gray-200 text-white font-semibold shadow appearance-none leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out">
                {{ $titulo }}</h4>
            <a class="hover:text-gray-200 shadow appearance-none leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none"
                href="{{ $link }}">
                <span>Ver completo</span>
                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
