<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2 lg:col-span-3">
                <x-card-view categoria="CRÓNICAS" titulo="LAS LENGUAS ORIGINARIAS DEL PERÚ ¿SERÁN IMPORTANTES TOMARLAS EN CUENTA HOY EN DÍA?"
                    link="{{ route('posts.show4') }}" img="/img/Bolivia-lenguas-indigenas.jpg" tag="{{ route('posts.index') }}"
                    content="En el Perú se habla alrededor de 47 lenguas originarias, entre ellas se encuentran el aimara, ashaninka, yagua, bora, quechua, entre otros. Sabemos que existen poblaciones que no hablan el idioma castellano, estos tienen sus propias lenguas..." />
            </article>
        </div>

        {{-- <div class="mt-4">
            {{ $posts->links() }}
        </div> --}}

    </div>
</x-app-layout>
