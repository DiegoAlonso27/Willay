<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="mb-2 uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach ($posts as $post)
                <x-card-post :post="$post" :loop="$loop"/>
            @endforeach

        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
