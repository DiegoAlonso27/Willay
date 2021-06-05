<footer class="footer bg-gray-200 relative pt-1 border-b-2 border-red-700">
    <div class="container mx-auto px-7">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col justify-center">
                    <img class="block lg:hidden h-16 w-auto" src="/img/logo-3.svg" alt="Workflow">
                    <img class="hidden lg:block h-28 w-28 object-center object-cover" src="/img/logo-2.svg"
                        alt="Workflow">
                    <div class="flex justify-center">
                        <a class="m-1.5 text-xl text-blue-800" href="#"><i class="fab fa-facebook"></i></a>
                        <a class="m-1.5 text-xl text-pink-600" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="m-1.5 text-xl text-blue-400" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="m-1.5 text-xl text-red-600" href="#"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Secciones</span>
                    <span class="my-2"><a href="{{ route('home.index') }}"
                            class="text-red-700 text-md hover:text-red-500"><i class="fas fa-laptop-house"></i>
                            Home</a></span></br>
                    <span class="my-2"><a href="#" class="text-red-700  text-md hover:text-red-500"><i
                                class="far fa-play-circle"></i> Podcast</a></span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2"></span></br>
                    <span class="my-2"><a href="{{ route('posts.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="fas fa-blog"></i>
                            Blog</a></span></br>
                    <span class="my-2"><a href="{{ route('reports.index') }}"
                            class="text-red-700  text-md hover:text-red-500"><i class="far fa-newspaper"></i>
                            Noticias</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm md:text-base text-red-600 font-bold mb-2">
                    Copyright © 2021 by Diego Ordoñez. Todos los Derechos Reservados
                </p>
            </div>
        </div>
    </div>
</footer>
