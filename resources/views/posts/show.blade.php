<x-app-layout>
    <link rel="stylesheet"
        href="https://horizon-ui.com/shadcn-nextjs-boilerplate/_next/static/css/32144b924e2aa5af.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('posts.index') }}"> {{ __('Yangiliklar') }}</a>
        </h2>
    </x-slot>

    <div class="container">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="flex flex-col items-center md:flex-row">
                <!-- Product Image -->
                <div class="md:w-1/3 p-4 relative">
                    <div class=" ">
                        <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}"
                            class="w-full h-auto object-cover rounded-lg" />
                    </div>
                </div>

                <!-- Product Details -->
                <div class="md:w-2/3 p-6">
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $post->title }}</h1>
                    <p class="text-sm text-gray-600 mb-4">{{ $post->body }}</p>

                    <div class="flex items-center mb-4">
                        <span class="text-sm text-gray-500 ml-2">1,234 reviews</span>
                    </div>
                </div>
                @auth
                if(auth()->user()->id == $post->user_id)
                    <button class="btn btn-primary py-2 px-4 bg-gray-400 rounded mx-2"><a
                            href="{{ route('posts.edit', $post->id) }}"></a>Edit</button>
                    <form action="#" method="get" confirm("o'chirishga aminmisiz?")>
                        @method('delete')
                        @csrf
                        <button class="btn btn-primary py-2 px-4 bg-red-400 rounded">Delete</button>
                    </form>
                @endauth
            </div>
        </div>


        <div class="flex flex-col flex-start  ">
            <div
                class="mx-auto flex w-full mt-5 flex-col flex-start px-5 pt-0 md:h-[unset] max-w-[520px] lg:px-6 xl:pl-0">
                <div class="relative flex w-full flex-col pt-[5px] md:pt-0">
                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm mb-5 h-min flex items-center aligh-center max-w-full py-8 px-4 dark:border-zinc-800">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full min-h-[68px] min-w-[68px]"><img
                                class="aspect-square h-full w-full"
                                src="https://lh3.googleusercontent.com/a/ACg8ocKIWdfb7aIybpzBFfDOHi2TyFWvW73xKa2hXx8Zw1Xzoz62T18=s96-c" /></span>
                        <div>
                            <p
                                class="text-xl font-extrabold text-zinc-950 leading-[100%] dark:text-white pl-4 md:text-3xl">
                                Vlad BZ
                            </p>
                            <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400 md:mt-2 pl-4 md:text-base">
                                bu yaxshi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex  items-center justify-center p-4">
            <div class="w-full max-w-sm">
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <div class="relative rounded-2xl bg-white p-6 shadow">
                        <div class="mb-4 flex items-center justify-between">
                            <h2 class="text-xl font-semibold text-gray-900">Leave feedback</h2>
                        </div>
                        <p class="mb-4 text-center text-sm">We'd love to hear what went well or how we can improve the
                            product experience.
                        </p>
                        <textarea name="body"
                            class="mb-3 w-full rounded-lg border border-gray-200 p-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            rows="4" placeholder="Your feedback...">
                </textarea>
                        <button type="submit"
                            class="w-full rounded-lg bg-gray-900 py-2.5 text-sm font-medium text-white transition duration-300 hover:bg-gray-800">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
