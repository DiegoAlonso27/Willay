<x-app-layout>

    <body class="text-gray-800 antialiased">
        <main>
            <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover"
                    style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12">
                                <h1 class="text-white font-semibold text-5xl">
                                    La información es para todos.
                                </h1>
                                <p class="mt-4 text-lg text-gray-300">
                                    Crear un medio de comunicación digital en que el objetivo estará en comunicar no
                                    solo en la lengua española sino también en quechua, que es la lengua madre en
                                    nuestro país.  Según los censos nacionales del 2017, hay 441.928 personas más de las
                                    registradas en el 2007 que declaran ser quechuahablantes.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </div>
            <section class="pb-20 bg-gray-300 -mt-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap">
                        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">Concepto Grafico</h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        Se trabajo con la inicial del nombre y con la representación de un botón de
                                        encendido.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-4/12 px-4 text-center">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                        <i class="fas fa-retweet"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">Justificación</h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        Willay enciende una oportunidad para el periodismo de representar a la nueva
                                        generación de manera evolucionada, utilizando lenguajes de inclusión correctos
                                        como los idiomas nativos de los habitantes de todas partes del país.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                                <div class="px-4 py-5 flex-auto">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                        <i class="fas fa-fingerprint"></i>
                                    </div>
                                    <h6 class="text-xl font-semibold">Estrategia grafica</h6>
                                    <p class="mt-2 mb-4 text-gray-600">
                                        Se eligió un imagotipo con el fin de desarrollar diferentes versiones del logo
                                        en sus aplicaciones: Páginas Web, redes Sociales, aplicación móvil, medios
                                        impresos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center mt-32">
                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <div
                                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                                <i class="fas fa-user-friends text-xl"></i>
                            </div>
                            <h3 class="text-3xl mb-2 font-semibold leading-normal">
                                Visión
                            </h3>
                            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                                Convertirnos en la compañía periodística líder en el Perú, para brindar valor a nuestros
                                lectores y que satisfaga sus ganas de informarse interactivamente.
                            </p>
                            <h3 class="text-3xl mb-2 font-semibold leading-normal">
                                Misión
                            </h3>
                            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                Brindar piezas gráficas de buena calidad, comprometidos con la difusión del quechua,
                                mediante noticias socioculturales, para beneficio de nuestros lectores a nivel nacional.
                            </p>
                            {{-- <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                                class="font-bold text-gray-800 mt-8">Check Tailwind Starter Kit!</a> --}}
                        </div>
                        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                                <img alt="..."
                                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                                    class="w-full align-middle rounded-t-lg" />
                                <blockquote class="relative p-8 mb-4">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 583 95" class="absolute left-0 w-full block"
                                        style="height: 95px; top: -94px;">
                                        <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current">
                                        </polygon>
                                    </svg>
                                    {{-- <h4 class="text-xl font-bold text-white">
                                        Top Notch Services
                                    </h4>
                                    <p class="text-md font-light mt-2 text-white">
                                        The Arctic Ocean freezes every winter and much of the
                                        sea-ice then thaws every summer, and that process will
                                        continue whatever happens.
                                    </p> --}}
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative py-20">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                            <img alt="..." class="max-w-full rounded-lg shadow-lg"
                                src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                        </div>
                        <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                            <div class="md:pr-12">
                                <div
                                    class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                    <i class="fas fa-rocket text-xl"></i>
                                </div>
                                <h3 class="text-3xl font-semibold">Identidad Social</h3>
                                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                    Comunicar de manera clara y sencilla generando empatía con el público. Además, hacer
                                    surgir la iniciativa de que la lengua quechua prevalezca y a través de los años.
                                    Superando así su extinción. Con esto se aportará un valor real que es generar una
                                    transformación social (inclusión).
                                </p>
                                <ul class="list-none mt-6">
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                        class="fas fa-fingerprint"></i></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">
                                                    <b> Rubro: </b> Social-cultural
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                        class="fab fa-html5"></i></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">Amazing page examples</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                        class="far fa-paper-plane"></i></span>
                                            </div>
                                            <div>
                                                <h4 class="text-gray-600">Dynamic components</h4>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="pt-20 pb-48">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center text-center mb-24">
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                            <p class="text-lg leading-relaxed m-4 text-gray-600">
                                According to the National Oceanic and Atmospheric
                                Administration, Ted, Scambos, NSIDClead scentist, puts the
                                potentially record maximum.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt="..." src="./assets/img/team-1-800x800.jpg"
                                    class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold">Ryan Tompson</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        Web Developer
                                    </p>
                                    <div class="mt-6">
                                        <button
                                            class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-twitter"></i></button><button
                                            class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-facebook-f"></i></button><button
                                            class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-dribbble"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt="..." src="./assets/img/team-2-800x800.jpg"
                                    class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold">Romina Hadid</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        Marketing Specialist
                                    </p>
                                    <div class="mt-6">
                                        <button
                                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-google"></i></button><button
                                            class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt="..." src="./assets/img/team-3-800x800.jpg"
                                    class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold">Alexa Smith</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        UI/UX Designer
                                    </p>
                                    <div class="mt-6">
                                        <button
                                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-google"></i></button><button
                                            class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-twitter"></i></button><button
                                            class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-instagram"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                            <div class="px-6">
                                <img alt="..." src="./assets/img/team-4-470x470.png"
                                    class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                                <div class="pt-6 text-center">
                                    <h5 class="text-xl font-bold">Jenna Kardi</h5>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        Founder and CEO
                                    </p>
                                    <div class="mt-6">
                                        <button
                                            class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-dribbble"></i></button><button
                                            class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-google"></i></button><button
                                            class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-twitter"></i></button><button
                                            class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                            type="button">
                                            <i class="fab fa-instagram"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <section class="pb-20 relative block bg-gray-900">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
                <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                    <div class="flex flex-wrap text-center justify-center">
                        <div class="w-full lg:w-6/12 px-4">
                            <h2 class="text-4xl font-semibold text-white">Contactanos</h2>
                            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            </p>
                        </div>
                    </div>
                    {{-- <div class="flex flex-wrap mt-12 justify-center">
                        <div class="w-full lg:w-3/12 px-4 text-center">
                            <div
                                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                <i class="fas fa-medal text-xl"></i>
                            </div>
                            <h6 class="text-xl mt-5 font-semibold text-white">
                                Excelent Services
                            </h6>
                            <p class="mt-2 mb-4 text-gray-500">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 text-center">
                            <div
                                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                <i class="fas fa-poll text-xl"></i>
                            </div>
                            <h5 class="text-xl mt-5 font-semibold text-white">
                                Grow your market
                            </h5>
                            <p class="mt-2 mb-4 text-gray-500">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                        <div class="w-full lg:w-3/12 px-4 text-center">
                            <div
                                class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                                <i class="fas fa-lightbulb text-xl"></i>
                            </div>
                            <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                            <p class="mt-2 mb-4 text-gray-500">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </section>
            <section class="relative block py-24 lg:pt-0 bg-gray-900">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                        <div class="w-full lg:w-6/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                                <div class="flex-auto p-5 lg:p-10">
                                    <h4 class="text-2xl font-semibold">Cual es tu consulta?</h4>
                                    <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                    </p>
                                    <div class="relative w-full mb-3 mt-8">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="full-name">Nombre completo</label><input type="text"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="email">Email</label><input type="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="message">Mensaje</label><textarea rows="4" cols="80"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Type a message..."></textarea>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button type="submit"
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                            style="transition: all 0.15s ease 0s;">
                                            Enviar Mensaje
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }

    </script>
</x-app-layout>
