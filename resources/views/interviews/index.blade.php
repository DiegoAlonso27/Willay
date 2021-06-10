<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2">
                <x-card-view categoria="CASOS" titulo="Entrevista a Roxana Quispe Collantes"
                    link="{{ route('interviews.show') }}" img="/img/ENTREVISTA A ROXANA QUISPE COLLANTES.jpg"
                    content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ESPECIALISTAS" titulo="Entrevista a Sadhami, voluntaria de la Enséñame"
                    link="{{ route('interviews.show2') }}" img="/img/ENTREVISTA SADHAMI CARAZA.jpg" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="CASOS" titulo="Entrevista a Beatriz García Blasco"
                    link="{{ route('interviews.show3') }}" img="/img/ENTREVISTA BEATRIZ GARCÍA BLASCO.jpg"
                    content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ESPECIALISTAS" titulo="Entrevista a Alvin Medina"
                    link="{{ route('interviews.show4') }}" img="/img/ENTREVISTA A ALVIN MEDINA.jpg" content="" />
            </article>
        </div>

        {{-- <div class="mt-4">
            {{ $posts->links() }}
        </div> --}}

    </div>
</x-app-layout>
