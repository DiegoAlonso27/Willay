<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6">
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2">
                <x-card-view categoria="PODCAST" titulo="Podcast Aldrish Gálvez, creador del Libro Planetastico"
                    link="{{ route('podcasts.show') }}" img="/img/PODCAST ALDRISH GÁLVEZ.jpg"
                    content="" tag="{{ route('podcasts.index') }}" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <x-card-view categoria="PODCAST" titulo="HOLA WILLAY PODCAST - EDICIÓN 01"
                    link="{{ route('podcasts.show2') }}" img="/img/PODCAST ALMENDRA CHINGO.jpg" tag="{{ route('podcasts.index') }}"
                     content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <x-card-view categoria="PODCAST" titulo="HOLA WILLAY PODCAST - EDICIÓN 02"
                    link="{{ route('podcasts.show3') }}" img="/img/PODCAST PAÚL RIVERA.jpg" tag="{{ route('podcasts.index') }}"
                     content="" />
            </article>


            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden md:col-span-2">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Roxana Quispe Collantes"
                    link="{{ route('interviews.show') }}" img="/img/ENTREVISTA A ROXANA QUISPE COLLANTES.jpg"
                    tag="{{ route('interviews.index') }}"
                     content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Sadhami, voluntaria de la Enséñame"
                    link="{{ route('interviews.show2') }}" img="/img/ENTREVISTA SADHAMI CARAZA.jpg" tag="{{ route('interviews.index') }}"
                     content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Beatriz García Blasco"
                    link="{{ route('interviews.show3') }}" img="/img/ENTREVISTA BEATRIZ GARCÍA BLASCO.jpg"
                    tag="{{ route('interviews.index') }}"
                     content="" />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="ENTREVISTAS" titulo="Entrevista a Alvin Medina"
                    link="{{ route('interviews.show4') }}" img="/img/ENTREVISTA A ALVIN MEDINA.jpg" tag="{{ route('interviews.index') }}"
                     content="" />
            </article>


            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <x-card-view categoria="CRÓNICAS" titulo="SOLIDARIDAD Y ENSEÑANZA QUE MEJORAN LA EDUCACIÓN"
                    link="{{ route('posts.show') }}" img="/img/unnamed.jpg" tag="{{ route('posts.index') }}"
                    content="La pandemia provocada por el COVID-19 no solo afecto y perjudicó a personas mayores con el desempleo, sino que también a la educación de muchos niños con bajos recursos, que no contaban con Wifi en casa, un televisor, una laptop o siquiera con un teléfono digital, implementos indispensables para continuar con su educación en casa..." />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="CRÓNICAS" titulo="Planetastico, un libro que desarrolla conciencia ambiental"
                    link="{{ route('posts.show2') }}" img="/img/conciencia-ambienta-823x400.jpg" tag="{{ route('posts.index') }}"
                    content="Aldrish Galvez, es un chiclayano de 18 años, creador de un libro llamado Planetastico, el cual cuenta con un tema muy importante hoy en día, el cuidado del medio ambiente. Para la realización del libro decidió basarse en su propia experiencia de vida, la cual utilizó tanto para la historia como para la realización de los personajes..." />
            </article>
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden col-span-1">
                <x-card-view categoria="CRÓNICAS" titulo="CORDELIA SÁNCHEZ, UNA VOZ QUE PIDE INFORMACIÓN PARA TODOS"
                    link="{{ route('posts.show3') }}" img="/img/microfono_0.jpg" tag="{{ route('posts.index') }}"
                    content="La señora Cordelia pide igualdad en los medios.
                    Era un martes como cualquiera, y como todos los martes me despertaba temprano a realizar los quehaceres del día, sin embargo, este día iba ser diferente. Me terminaba de alistar y sin tomar desayuno corrí a tomar el micro que me llevaría a Canto Grande camino a la vivienda de la señora Cordelia Sánchez. Por otra ruta me daba el alcance mi..." />
            </article>

        </div>
    </div>
</x-app-layout>
