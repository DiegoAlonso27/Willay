<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl fond-bold text-gray-600">{{ $report->name }}</h1>

        <div class="text.lg text-gray-500 mb-2">
            {{ $report->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <figure>
                    <img src="{{ Storage::url($report->image->url) }}" class="w-full h-80 object-cover object-center"
                        alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {{ $report->body }}
                </div>

            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600">
                    Mas en {{ $report->category->name }}
                </h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('reports.show', $similar) }}">
                                <img class="w-36 h-20 object-cover object-center"
                                    src="{{ Storage::url($similar->image->url) }}" alt="">
                                <span class="w-52 ml-2 text-gray-600">{{ $similar->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

        </div>
    </div>
</x-app-layout>
