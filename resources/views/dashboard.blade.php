<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @if (auth()->user()->hasRole('admin'))
                <p>Siz adminsiz</p>
            @elseif(auth()->user()->hasRole('writer'))
                <p>Siz writer siz</p>
            @else
                <p>Siz oddiy foydalanuvchisiz</p>
            @endif
        </h2>
    </x-slot>

    <div class="collection container m-auto">
        <div class="flex container">
            @foreach ($posts as $post)
                <div class="min bg-gray-100 flex items-center justify-center p-4">
                    <div
                        class="max-w-sm w-full bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all">
                        <div class="relative">
                            <img src="https://placehold.co/400x300" alt="Product" class="w-full h-52 object-cover" />
                        </div>

                        <div class="p-5 space-y-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Classic T-Shirt</h3>
                                <p class="text-gray-500 mt-1">Premium cotton blend</p>
                            </div>

                            <div class="flex justify-between items-center">
                                <div class="space-y-1">
                                    <p class="text-2xl font-bold text-gray-900">$49.99</p>
                                    <p class="text-sm text-gray-500 line-through">$69.99</p>
                                </div>

                                <div class="flex items-center gap-1">
                                    <div class="text-yellow-400">★★★★</div>
                                    <div class="text-gray-300">★</div>
                                    <span class="text-sm text-gray-600 ml-1">(42)</span>
                                </div>
                            </div>

                            <button
                                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg transition-colors">
                                <a href="{{ route('posts.show', ['id', $post->id]) }}">Read more</a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>

</x-app-layout>
