<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yangiliklar') }}
        </h2>
    </x-slot>

    <div class="collection container m-auto mt-10">
        <button 
        class="w-[280px] bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg transition-colors">
       <a href="{{route('posts.create')}}">Create Post</a>
    </button>
        <div class="flex">
            @foreach ($posts as $post)
                <div class="min bg-gray-100 flex items-center justify-center p-4">
                    <div
                        class="max-w-sm w-full bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all">
                        <div class="relative">
                            <img src="https://placehold.co/400x300" alt="Product" class="w-full h-52 object-cover" />
                            <span
                                class="absolute top-3 right-3 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Sale
                            </span>
                        </div>

                        <div class="p-5 space-y-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">{{$post->title}}</h3>
                                <p class="text-gray-500 mt-1">{{$post->body}}</p>
                            </div>

                            <button 
                                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg transition-colors">
                               <a href="{{route('posts.show', ['id', $post->id])}}">Read more</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links()}}
    </div>

</x-app-layout>
