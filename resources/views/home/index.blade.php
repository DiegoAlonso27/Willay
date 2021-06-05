<x-app-layout>
    <x-slider />
    <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                Publicaciones
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-center object-cover" src="{{ Storage::url($post->image->url) }}"
                        alt="">
                    <div class="px-5 pt-3 pb-1">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('posts.tag', $tag) }}"
                                class="inline-block px-3 h-6 bg-red-500 text-white rounded-full">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-400 leading-8 font-bold hover:text-gray-500 mb-2">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
    <div class="flex justify-center border-t-2 border-b-2 border-red-600 py-2 mb-8 mx-auto">
        <a class="font-bold text-black text-base hover:text-gray-600 md:text-xl lg:text-2xl"
            href="{{ route('posts.index') }}">VER MÁS</a>
    </div>
    <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                Noticias Recientes
            </a>
        </div>
        <div class="my-4">
            <div class="md:flex mt-8 md:-mx-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($reports as $report)
                        <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center"
                            style="background-image: url('{{ Storage::url($report->image->url) }}')">
                            <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                <div class="px-10 max-w-xl">
                                    <h2 class="text-2xl text-white font-semibold">{{ $report->name }}</h2>
                                    <a class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none"
                                        href="{{ route('reports.show', $report) }}">
                                        <span>Ver completo</span>
                                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="mb-10 mt-8">
            <a role="button" class=" text-xl bg-red-600 hover:bg-red-700 text-white px-8 py-4  border rounded-full">
                Fundadores
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6">

            <div class="flex items-center h-full w-full justify-center">

                <div class="bg-white shadow-xl rounded-lg py-3">
                    <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-full mx-auto"
                            src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp"
                            alt="John Doe">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Joh Doe</h3>
                        <div class="text-center text-gray-400 text-xs font-semibold">
                            <p>Web Developer</p>
                        </div>
                        <table class="text-xs my-3 hidden lg:block">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                    <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                    <td class="px-2 py-2">+977 9955221114</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                    <td class="px-2 py-2">john@exmaple.com</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center my-3">
                            <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                                href="#">View Profile</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="flex items-center h-full w-full justify-center">

                <div class="max-w-xs">
                    <div class="bg-white shadow-xl rounded-lg py-3">
                        <div class="photo-wrapper p-2">
                            <img class="w-32 h-32 rounded-full mx-auto"
                                src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp"
                                alt="John Doe">
                        </div>
                        <div class="p-2">
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Joh Doe</h3>
                            <div class="text-center text-gray-400 text-xs font-semibold">
                                <p>Web Developer</p>
                            </div>
                            <table class="text-xs my-3 hidden lg:block">
                                <tbody>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                        <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                        <td class="px-2 py-2">+977 9955221114</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                        <td class="px-2 py-2">john@exmaple.com</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-center my-3">
                                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                                    href="#">View Profile</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="flex items-center h-full w-full justify-center">

                <div class="max-w-xs">
                    <div class="bg-white shadow-xl rounded-lg py-3">
                        <div class="photo-wrapper p-2">
                            <img class="w-32 h-32 rounded-full mx-auto"
                                src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp"
                                alt="John Doe">
                        </div>
                        <div class="p-2">
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Joh Doe</h3>
                            <div class="text-center text-gray-400 text-xs font-semibold">
                                <p>Web Developer</p>
                            </div>
                            <table class="text-xs my-3 hidden lg:block">
                                <tbody>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                        <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                        <td class="px-2 py-2">+977 9955221114</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                        <td class="px-2 py-2">john@exmaple.com</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-center my-3">
                                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                                    href="#">View Profile</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="flex items-center h-full w-full justify-center">

                <div class="max-w-xs">
                    <div class="bg-white shadow-xl rounded-lg py-3">
                        <div class="photo-wrapper p-2">
                            <img class="w-32 h-32 rounded-full mx-auto"
                                src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp"
                                alt="John Doe">
                        </div>
                        <div class="p-2">
                            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">Joh Doe</h3>
                            <div class="text-center text-gray-400 text-xs font-semibold">
                                <p>Web Developer</p>
                            </div>
                            <table class="text-xs my-3 hidden lg:block">
                                <tbody>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                        <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                                        <td class="px-2 py-2">+977 9955221114</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                        <td class="px-2 py-2">john@exmaple.com</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-center my-3">
                                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                                    href="#">View Profile</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
