<footer class="footer bg-gray-200 relative pt-1 border-b-2 border-red-700">
    <div class="container mx-auto px-7">

        <div class="sm:flex sm:mt-4">
            <div class="mt-4 w-full px-20 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col justify-center">
                    <img class="block lg:hidden h-16 w-auto" src="/img/logo-3.svg" alt="Workflow">
                    <img class="hidden lg:block h-28 w-28 object-center object-cover" src="/img/logo-2.svg"
                        alt="Workflow">
                    <div class="flex justify-center">
                        <a class="m-1.5 text-xl text-blue-800" target="_blank" href="https://www.facebook.com/holawillay.pe/"><i class="fab fa-facebook"></i></a>
                        <a class="m-1.5 text-xl text-pink-600" target="_blank" href="https://www.instagram.com/holawillay.pe/"><i class="fab fa-instagram"></i></a>
                        <a class="m-1.5 text-xl text-blue-400" target="_blank" href="https://mobile.twitter.com/HolaWillay"><i class="fab fa-twitter"></i></a>
                        <a class="m-1.5 text-xl text-red-600" target="_blank" href="https://m.youtube.com/watch?v=YuFZXoaH7uo&t=3s"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Secciones</span>
                    <span class="my-2"><a href="{{ route('home.index') }}"
                            class="text-red-700 text-md hover:text-red-500"><i class="fas fa-laptop-house"></i>
                            Home</a></span></br>
                    <span class="my-2"><a href="{{ route('podcasts.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="far fa-play-circle"></i>
                            Podcast</a></span></br>
                    <span class="my-2"><a href="{{ route('abouts.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="fas fa-user-friends"></i> Sobre
                            Nosotros</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2"></span></br>
                    <span class="my-2"><a href="{{ route('posts.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="fas fa-blog"></i>
                            Blog</a></span></br>
                    <span class="my-2"><a href="{{ route('interviews.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="fas fa-microphone-alt"></i>
                            Entrevistas</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm md:text-base text-red-600 font-bold mb-2">
                    Copyright © 2021 Willay. Todos los Derechos Reservados
                </p>
            </div>
        </div>
    </div>
</footer>
