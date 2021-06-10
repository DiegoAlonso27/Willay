<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2">
                <x-card-view categoria="PODCAST" titulo="Podcast Aldrish Gálvez, creador del Libro Planetastico"
                    link="{{ route('podcasts.show') }}" img="/img/PODCAST ALDRISH GÁLVEZ.jpg" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <x-card-view categoria="PODCAST" titulo="HOLA WILLAY PODCAST - EDICIÓN 01"
                    link="{{ route('podcasts.show2') }}" img="/img/PODCAST ALMENDRA CHINGO.jpg" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <x-card-view categoria="PODCAST" titulo="HOLA WILLAY PODCAST - EDICIÓN 02"
                    link="{{ route('podcasts.show3') }}" img="/img/PODCAST PAÚL RIVERA.jpg" content="" />
            </article>
        </div>

        {{-- <div class="mt-4">
            {{ $posts->links() }}
        </div> --}}

    </div>
</x-app-layout>
