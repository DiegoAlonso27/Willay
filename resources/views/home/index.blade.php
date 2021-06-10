<x-app-layout>
    <x-slider />
    {{-- <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                Publicaciones
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-center object-cover" src="{{ Storage::url($post->image->url) }}"
                        alt="">
                    <div class="px-5 pt-3 pb-1">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('posts.tag', $tag) }}"
                                class="inline-block px-3 h-6 bg-red-500 text-white rounded-full">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-400 leading-8 font-bold hover:text-gray-500 mb-2">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
    <div class="flex justify-center border-t-2 border-b-2 border-red-600 py-2 mb-8 mx-auto">
        <a class="font-bold text-black text-base hover:text-gray-600 md:text-xl lg:text-2xl"
            href="{{ route('posts.index') }}">VER MÁS</a>
    </div> --}}
    <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                Novedades
            </a>
        </div>
        <div class="my-4">
            <div class="md:flex mt-8 md:-mx-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-view-card titulo="SOLIDARIDAD Y ENSEÑANZA QUE MEJORAN LA EDUCACIÓN"
                        link="{{ route('posts.show') }}" img="/img/unnamed.jpg" />
                    <x-view-card titulo="Planetastico, un libro que desarrolla conciencia ambiental"
                        link="{{ route('posts.show2') }}" img="/img/conciencia-ambienta-823x400.jpg" />
                    <x-view-card titulo="CORDELIA SÁNCHEZ, UNA VOZ QUE PIDE INFORMACIÓN PARA TODOS"
                        link="{{ route('posts.show3') }}" img="/img/microfono_0.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center border-t-2 border-b-2 border-red-600 py-2 mb-8 mx-auto">
        <a class="font-bold text-black text-base hover:text-gray-600 md:text-xl lg:text-2xl"
            href="{{ route('posts.index') }}">VER MÁS</a>
    </div>
    <div class="bg-gray-500">
        <div class="container py-4 ">
            <form class="w-full  px-8 pt-6 pb-4 mb-2">
                <div class="mb-4">
                    <input
                        class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                        id="emailaddress" type="email" placeholder="ejemplo@email.com">
                </div>

                <div class="flex items-center justify-between pt-4">
                    <button
                        class="text-xl bg-gradient-to-r from-red-700 to-red-300 hover:from-red-900 hover:to-red-400 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                        type="submit">
                        RECIBIR NOTICIAS
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                YOUTUBE
            </a>
        </div>
        <div class="my-4">
            <div class="md:flex mt-8 md:-mx-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-view-card titulo="Podcast Aldrish Gálvez, creador del Libro Planetastico" link="#"
                        img="/img/PODCAST ALDRISH GÁLVEZ.jpg" />
                    <x-view-card titulo="Entrevista a Sadhami, voluntaria de la Enséñame"
                        link="{{ route('interviews.show2') }}" img="/img/ENTREVISTA SADHAMI CARAZA.jpg" />
                    <x-view-card titulo="Entrevista a Roxana Quispe Collantes" link="{{ route('interviews.show') }}"
                        img="/img/ENTREVISTA A ROXANA QUISPE COLLANTES.jpg" />
                </div>
            </div>
        </div>
        <div class="mb-4 mt-8">
            <a role="button" href="https://www.youtube.com/channel/UC5S3pJ0DgcbJv0ezM2erXxA/videos" target="_blank"
                class="flex justify-center m-auto text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                VISITA NUESTRO CANAL
            </a>
        </div>
    </div>
    <div class="container pb-8">
        <div class="mb-10 mt-4">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                COMIC DEL MES
            </a>
        </div>
        <div class="w-full h-32 md:h-56 lg:h-80">
            <img class="w-full h-full md:mx-4 rounded-md overflow-hidden object-cover object-center bg-gray-500 shadow appearance-none leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out flex items-center mt-4 text-sm uppercase font-medium hover:underline focus:outline-none" src="/img/comic-min.jpg" alt="">
        </div>
    </div>
</x-app-layout>
