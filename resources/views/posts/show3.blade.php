<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">CORDELIA SÁNCHEZ, UNA VOZ QUE PIDE INFORMACIÓN PARA TODOS</h1>

        {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <b class="text-xl">Autor: Manuel Montalvan</b></br>
                <figure>
                    <img src="/img/microfono_0.jpg" class="w-full h-80 object-cover object-center my-6 rounded-md"
                        alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4 text-justify">
                    La señora Cordelia pide igualdad en los medios.</br>
                    Era un martes como cualquiera, y como todos los martes me despertaba temprano a realizar los
                    quehaceres del día, sin embargo, este día iba ser diferente. Me terminaba de alistar y sin tomar
                    desayuno corrí a tomar el micro que me llevaría a Canto Grande camino a la vivienda de la señora
                    Cordelia Sánchez. Por otra ruta me daba el alcance mi camarógrafo de turno, Cristopher Yslache, mi
                    cuñado, un chico de 18 años que se prepara para ser policía. En estos tiempos casi nadie se arriesga
                    a salir y mucho menos entrar a viviendas de otras personas.</br>
                    Llegamos a la casa de la señora Sánchez. Una señora muy alegre y algo nerviosa por la entrevista que
                    le íbamos a realizar. Nos sentamos y comenzó una charla muy amena. Cordelia que procede de Pucallpa
                    Ucayali, ella domina la lengua shipiba-koniba de la comunidad de San Francisco.</br></br>
                    <b class="text-xl">Falta de consideración a las lenguas originarias</b></br>
                    Cordelia o señito, como me permitió llamarla para entrar en confianza, me contó que en su tierra
                    natal habían emisoras radiales en las cuales informaban con su lengua de origen. Ella dejó su tierra
                    para venir a Lima a buscar un mejor futuro, como suelen hacer nuestros hermanos de provincia, con su
                    arte que lo plasmaba en cuadros de chute. Cuando Cordelia vino a Lima no dominaba el español, lo
                    aprendió con el tiempo, por ende, no entendía las noticias que escuchaba en la radio, tampoco las
                    que veía en televisión y mucho menos las que aparecían en los periódicos, es decir, estaba
                    desinformada. Con el pasar del tiempo encontró en Facebook algunos noticieros independientes que
                    brindaban información en su lengua, sin embargo, eran escasos y poco completos. Fue ahí donde le
                    pregunté:</br>
                    -¿Cómo se sentía al no poder estar informada debido al idioma cuando llegó a la capital?</br>
                    -Pues para ser sincera era muy incómodo no saber nada de lo que estaba pasando en mi país.</br>
                    -Comprendo, ¿su familia se sentía igual?</br>
                    -Mis hijos me preguntaban que hablaban los demás o que decían en los periódicos y no sabía qué
                    decirle porque yo tampoco entendía nada.</br></br>
                    <b class="text-xl">No hay muestra de interés por parte del estado</b></br>
                    Y así seguimos conversando, pero hubo algo que llamó mi atención y era la molestia e indignación que
                    sentía Cordelia al ver que no existía ningún tipo de interés por parte del estado o algún medio
                    privado por informar en otro idioma que no sea el castellano. ¿Es entendible no? Se sentía excluida
                    y no solo ella sino toda su comunidad. Sus palabras fueron… “no les importamos”. Tristes palabras,
                    pero ciertas? Pues al parecer sí porque antes no había por parte del estado, como lo hay ahora, un
                    programa para informar o una estación radial y mucho menos uno privado o independiente ahora si bien
                    hay sólo le dedican una hora y se centran en el Quechua y en el resto de lenguas? ¿Para cuándo se
                    implementarán programas, estaciones radiales o periódicos para aquellas personas con lenguas
                    originarias de nuestro país? Tal vez suene algo complejo y por esta razón nadie quiere hacerse
                    cargo. Aparecerán medios que busquen llegar a estas personas porque es la misión del comunicador.
                    Todos tenemos derecho a informarnos y si no lo hace el estado no vamos a sentarnos a esperar que lo
                    haga. Aquí aparece Willay un grupo de estudiantes de la carrera de Ciencias de la Comunicación que
                    se comprometen a no olvidarse de nuestros compatriotas que aún conservan ese legado, en sus lenguas
                    originarias, de nuestro país. Este humilde estudiante se retira con pesar, pero no sin seguir en la
                    lucha para que a todos les llegue la información.
                </div>

            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 my-6">
                    Más en Crónicas
                </h1>
                <ul>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show2') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md"
                                src="/img/conciencia-ambienta-823x400.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600">Planetastico, un libro que desarrolla conciencia
                                ambiental</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show') }}">
                            <img class="w-36 h-20 object-cover object-center rounded-md" src="/img/unnamed.jpg" alt="">
                            <span class="w-52 ml-2 text-gray-600"> SOLIDARIDAD Y ENSEÑANZA QUE MEJORAN LA
                                EDUCACIÓN</span>
                        </a>
                    </li>
                </ul>
            </aside>

        </div>
    </div>

</x-app-layout>
