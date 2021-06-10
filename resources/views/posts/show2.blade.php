<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">Planetastico, un libro que desarrolla conciencia
            ambiental</h1>

        {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <b class="text-xl">Autor: Nicol matumay</b></br>
                <figure>
                    <img src="/img/conciencia-ambienta-823x400.jpg"
                        class="w-full h-80 object-cover object-center my-6 rounded-md" alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4 text-justify">
                    Aldrish Galvez, es un chiclayano de 18 años, creador de un libro llamado Planetastico, el cual
                    cuenta con un tema muy importante hoy en día, el cuidado del medio ambiente. Para la realización del
                    libro decidió basarse en su propia experiencia de vida, la cual utilizó tanto para la historia como
                    para la realización de los personajes.</br>
                    Para Aldrish este libro comenzó desde que era pequeño, cuando junto a su abuela recogían botella de
                    plástico en las calles de Pátapo, para poder llevar un poco de comida a la mesa, desde ese momento
                    él sintió una necesidad muy grande en poder brindar soluciones hacia todas aquellas problemáticas
                    que nos rodean y afectan, especialmente a los más vulnerables que son los niños.</br>
                    El libro está hecho en base a cartón, tapas de botellas de plásticos y muchos otros materiales
                    reciclables, la visión de Aldrish al realizar su libro de esta manera, fue motivar a todos los niños
                    y hacer conciencia sobre la importancia del reciclaje, ya que al tener una portada de manera manual
                    y contando con materiales reciclables se verían de forma muy atractiva para ellos.</br>
                    No solo consiguió crear Planetastico para concientizar a los niños sobre el cuidado del medio
                    ambiente, sino que también logró ejecutar un libro que ayudará a entender el bienestar del planeta,
                    logrando inspirar a niños y mejorando el futuro de muchos, hasta del propio Aldrish.</br></br>
                    <b class="text-xl">No hay mal que por bien no venga</b></br>
                    No es una sorpresa escuchar que muchas personas fueron perjudicadas por la llegada de la pandemia a
                    inicios del años 2020, para Aldrish fue un golpe muy duro, ya que tuvo que dejar de estudiar, pero
                    como siempre dicen, no hay mal que por bien no venga, y es así como dentro de su confinamiento en
                    casa, comenzó a investigar por las redes sobre concursos de literatura, en donde no solo consiguió
                    postular en tres concurso nacionales, sino también logró inscribirse en dos importantes concursos
                    internacionales, concursos en donde hasta la fecha, Planetastico ha conseguido obtener el primer
                    lugar en cada una de las competencias.</br>
                    Entre los Concursos nacionales en los que participó se encuentran: Premio metropolitano de la
                    municipalidad de lima, premio nacional protagonistas del cambio UPC y el concurso lima lee.
                    Concursos internaciones: Concurso internacional organizado por corea del sur y el concurso
                    internacional seventeen children.</br></br>
                    <b class="text-xl">Nuevos proyectos</b></br>
                    Ganar todos esos premios generaron una gran exposición del libro, por varios medios de comunicación,
                    consiguiendo que el libro se hiciera cada vez más popular entre el público y como las buenas
                    noticias no son de acabar, también le permitió a Aldrish estar en conversaciones con algunas
                    editoriales que convertirán su libro manual, en una obra editada en base cartonera con dibujos 3D,
                    lo cual lograría el poder masificar Planetastico oficialmente de manera nacional e internacional.
                    Como si los proyecto de Aldrish no tuvieran fin, ahora también busca realizar un bien en la
                    comunidad, por lo que se determinó a la creación de su primera biblioteca, en un asentamiento
                    humano, llamado La Nueva Casuarina, ubicado en lo más alto de san juan de Lurigancho, para lograr
                    concretar su biblioteca, consiguió la ayuda de la municipalidad y mucho apoyo de donadores de
                    libros, siendo todos impulsados por el mismo ideal, el de mejorar a la sociedad y apoyar a quienes
                    más lo necesitan.</br>
                    Demostrando que no existen límites para algún sueño o para alguna meta que desees realizar, Aldrish
                    sirve de inspiración para muchos, ya que él consiguió no solo dejar de lado todos esos obstáculos y
                    limitaciones que se le presentaron al momento de impulsar la visión de su libro, sino que también
                    logró generar un gran impacto en la sociedad.
                </div>

            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 my-6">
                    Más en Crónicas
                </h1>
                <ul>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md" src="/img/unnamed.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600"> SOLIDARIDAD Y ENSEÑANZA QUE MEJORAN LA
                                EDUCACIÓN</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show3') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md" src="/img/microfono_0.jpg"
                                alt="">
                            <span class="w-52 ml-2 text-gray-600">CORDELIA SÁNCHEZ, UNA VOZ QUE PIDE INFORMACIÓN PARA
                                TODOS</span>
                        </a>
                    </li>
                </ul>
            </aside>

        </div>
    </div>

</x-app-layout>
