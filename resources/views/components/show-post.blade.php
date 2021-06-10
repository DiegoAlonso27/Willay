<div class="container py-8">
    <h1 class="text-4xl fond-bold text-gray-600">{{ $titulo }}</h1>

    {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- contenido principal --}}
        <div class="lg:col-span-2">

            <figure>
                <img src="{{ $img }}" class="w-full h-80 object-cover object-center" alt="">
            </figure>
            <div class="text-base text-gray-500 mt-4">
                {{ $content }}
            </div>

        </div>
        {{-- Contenido relacionado --}}
        <aside>
            <h1 class="text-2xl font-bold text-gray-600">
                Mas en {{ $categoria }}
            </h1>
            <ul>
                <li class="mb-4">
                    <a class="flex" href="{{ $link1 }}">
                        <img class="w-36 h-20 object-cover object-center" src="{{ $img1 }}" alt="">
                        <span class="w-52 ml-2 text-gray-600">{{ $name1 }}</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a class="flex" href="{{ $link2 }}">
                        <img class="w-36 h-20 object-cover object-center" src="{{ $img2 }}" alt="">
                        <span class="w-52 ml-2 text-gray-600">{{ $name2 }}</span>
                    </a>
                </li>
            </ul>
        </aside>

    </div>
</div>
