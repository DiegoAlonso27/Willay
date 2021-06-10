<div>
    <img class="w-full h-72 object-center object-cover" src="{{ $img }}" alt="">
    <div class="px-6 pt-4 pb-2">
        <a href="#" class="inline-block px-3 h-6 bg-red-500 text-white rounded-full">{{ $categoria }}</a>
    </div>
    <div class="px-6 py-4">
        <h1 class="text-2xl text-gray-400 leading-8 font-bold hover:text-gray-500 mb-2">
            <a href="{{ $link }}">{{ $titulo }}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {{ $content }}
        </div>
    </div>
</div>
