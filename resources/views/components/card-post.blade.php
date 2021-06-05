@props(['post', 'loop'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden
                    @if ($loop->first) md:col-span-2
                    @endif">
                    <img class="w-full h-72 object-center object-cover" src="{{Storage::url($post->image->url)}}" alt="">
                    <div class="px-6 pt-4 pb-2">
                        @foreach ($post->tags as $tag)
                            <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-red-500 text-white rounded-full">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div class="px-6 py-4">
                        <h1 class="text-2xl text-gray-400 leading-8 font-bold hover:text-gray-500 mb-2">
                            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                        </h1>
                        <div class="text-gray-700 text-base">
                            {{$post->extract}}
                        </div>
                    </div>
</article>
