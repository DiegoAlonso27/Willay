<x-app-layout>

    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">SOLIDARIDAD Y ENSEÑANZA QUE MEJORAN LA EDUCACIÓN</h1>

        {{-- <div class="text.lg text-gray-500 mb-2">
        {{ $post->extract }}
    </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <b class="text-xl">Autor: Nicol matumay</b></br>
                <figure>
                    <img src="/img/unnamed.jpg" class="w-full h-80 object-cover object-center my-6 rounded-md" alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4 text-justify">
                    La pandemia provocada por el COVID-19 no solo afecto y perjudicó a personas mayores con el
                    desempleo, sino que también a la educación de muchos niños con bajos recursos, que no contaban con
                    Wifi en casa, un televisor, una laptop o siquiera con un teléfono digital, implementos
                    indispensables para continuar con su educación en casa. </br>
                    Sabiendo todas estas problemáticas y necesidades es cuando Sígueme (Organización de voluntariado),
                    encargada de llevar víveres y donaciones a los más necesitados, decide crear el 9 de mayo de 2020
                    Enséñame, un voluntariado, en donde todas las personas que tengan las ganas de aportar su granito de
                    arena en mejorar la educación y la vida de los que más la necesitan, podían formar parte.</br>
                    Para ser parte del voluntariado, los tutores son sometidos a dos filtros, el primero consta de
                    responder encuentras, seguido de algunos videos de concientización, el segundo filtro es una
                    capacitación general y luego otra con tu núcleo de tutores del grado que escogieron previamente.
                    Para los padres que buscaban un tutor para su hijo, se les pide llenar un formulario con sus datos
                    básicos, así las cabezas de la organización pueden llevar un control y comunicación con ellos
                    previamente, esto debido a que los horarios de clases deben coordinarse previamente con el tutor
                    asignado.</br>
                    Aquellas ganas de ayudar y mejorar la educación, fueron las que impulsaron a Tabata Romero y Sadhami
                    Caraza a ser miembros del voluntariado de Enséñame, en donde no sólo desempeñarán el rol de tutoras
                    para sus niños, sino que también formarían un lazo especial con ellos, a pesar de solo conocerse por
                    teléfono.</br></br>
                    <b class="text-xl">Grandes Retos</b></br>
                    Tabata Romero, estudiante de psicología en la Universidad San Martin de Porres, con tan solo 19
                    años, tomó la decisión en el mes de setiembre de ser parte de Enséñame, logrando no solo a ser
                    tutora, sino que también consiguió subir de cargo, llegando a ser Coapoyo de una de las cabezas de
                    la organización.</br>
                    Ella nos cuenta que inició dando clases por medio de videollamada, dos veces por semana, a un niño
                    llamado Piero, de tan solo 7 años, al cual le costaba mucho el poder leer y escribir, por ello
                    Tabata no podía llevar las clases actuales de Primer Grado de primaria, que se transmitían en
                    Aprendo en casa con Piero, ya que las clases eran un poco avanzadas para él.</br>
                    Por esta razón, Tabata comenzó reforzando el abecedario y busco métodos para mejorar sus clases
                    dentro del voluntariado, en donde cada domingo todos los tutores se reunían, contaban las
                    actividades que habían tenido con sus niños durante la semana y con la ayuda de un psicólogo, que
                    también era voluntario, buscaban soluciones y maneras de hacer entretenidas sus clases.</br>
                    Lamentablemente a finales del mes de noviembre, la madre de Piero dejó de comunicarse con Tabata por
                    discrepancias con los horarios. por ese motivo tuvieron que asignarle otro alumno, esta vez fue una
                    niña de 7 años, llamada Keily, la cual representó un gran desafío para ella, esto debido a que la
                    pequeña no contaba con un teléfono digital, ni una computadora en su casa, solo un teléfono antiguo,
                    por el que logra comunicarse mediante mensajes de texto y llamadas.</br>
                    Por ello para enseñarle, Tabata utiliza mucho la imaginación de la niña, reforzando su creatividad y
                    explicándole cosas de la vida cotidiana tan solo con objetos que Keily encuentre en casa.</br></br>
                    <b class="text-xl">Fuertes Lazos</b></br>
                    Sahami Caraza, de tan solo 19 años, estudia Finanzas en la ciudad de New York, un día ella se
                    encontraba visualizando algunos estados por Instagram, cuando de pronto en un portal de noticias, se
                    le apareció el anuncio de Enséñame, le encanto la organización, no lo pensó dos veces y realizo
                    todos los requerimientos para poder ser tutora.</br>
                    Ella lleva tres meses siendo tutora de una niña llamada Anahi, una niña dulce y llena de alegría,
                    que está cruzando 6to de primaria, Sahami, no solo le enseña Matemática, Comunicación, Biología e
                    inglés, sino que también le enseña algunos temas un poco más avanzados de la currícula estudiantil,
                    reforzar su educación en casa.</br>
                    Después de un día de llenó de estudio, pasan a la actividad que más disfrutan, el tiempo de
                    descanso, en donde intercambian diferentes anécdotas, realizaban juegos, ríen mucho, realizaban
                    Origamis y hasta disfrutaron de películas juntas, Sahami y Anahi no solo son tutora y alumna, sino
                    que también formaron un vínculo mucho más grande, el de la amistad.</br>
                    Enséñame llegó a mejorar la educación de 19 departamentos del Perú, contando con un voluntariado de
                    2 mil tutores asignados y, aun así, todos los días esperan a que aparezcan nuevos tutores
                    voluntarios, para lograr la meta de mejorar la educación actual de los niños que más lo necesitan.

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
