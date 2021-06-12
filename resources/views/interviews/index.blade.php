<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Roxana Quispe Collantes"
                    link="{{ route('interviews.show') }}" img="/img/ENTREVISTA A ROXANA QUISPE COLLANTES.jpg"
                    tag="{{ route('interviews.index') }}" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Sadhami, voluntaria de la Enséñame"
                    link="{{ route('interviews.show2') }}" img="/img/ENTREVISTA SADHAMI CARAZA.jpg"
                    tag="{{ route('interviews.index') }}" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Beatriz García Blasco"
                    link="{{ route('interviews.show3') }}" img="/img/ENTREVISTA BEATRIZ GARCÍA BLASCO.jpg"
                    tag="{{ route('interviews.index') }}" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Alvin Medina"
                    link="{{ route('interviews.show4') }}" img="/img/ENTREVISTA A ALVIN MEDINA.jpg"
                    tag="{{ route('interviews.index') }}" content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Cordelia Sánchez García"
                    link="{{ route('interviews.show5') }}" img="/img/ENTREVISTA A CORDELIA SÁNCHEZ GARCÍA.jpg"
                    tag="{{ route('interviews.index') }}" content="" />
            </article>
        </div>

        {{-- <div class="mt-4">
            {{ $posts->links() }}
        </div> --}}

    </div>
</x-app-layout>
