<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">HOLA WILLAY PODCAST - EDICIÓN 02</h1>

        {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <b class="text-xl">Autor: Ordoñez Odar, Josep Garip</b></br>
                <figure>
                    <iframe class="w-full h-80 object-cover object-center my-6 rounded-md"
                        src="https://www.youtube.com/embed/Q6DqXnjX-DA" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </figure>
            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 my-6">
                    Más en Entrevistas
                </h1>
                <ul>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('podcasts.show2') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/PODCAST ALMENDRA CHINGO.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">HOLA WILLAY PODCAST - EDICIÓN 01</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('podcasts.show') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/PODCAST ALDRISH GÁLVEZ.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">Podcast Aldrish Gálvez, creador del Libro Planetastico</span>
                        </a>
                    </li>
                </ul>
            </aside>

        </div>
    </div>

</x-app-layout>
