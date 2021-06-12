<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">Entrevista a Alvin Medina</h1>

        {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <b class="text-xl">Autor: Tapia Torrealva, Franshesca</b></br>
                <figure>
                    <iframe class="w-full h-80 object-cover object-center my-6 rounded-md"
                        src="https://www.youtube.com/embed/wwWRqbroUxA" title="YouTube video player" frameborder="0"
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
                        <a class="flex" href="{{ route('interviews.show') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/ENTREVISTA A ROXANA QUISPE COLLANTES.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">Entrevista a Roxana
                                Quispe Collantes</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('interviews.show2') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/ENTREVISTA SADHAMI CARAZA.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">Entrevista a Sadhami, voluntaria de la Enséñame</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('interviews.show3') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/ENTREVISTA BEATRIZ GARCÍA BLASCO.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">Entrevista a Beatriz García Blasco</span>
                        </a>
                    </li>
                </ul>
            </aside>

        </div>
    </div>

</x-app-layout>
