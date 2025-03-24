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
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- component -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-10">
        <div class="flex flex-col items-center md:flex-row">
            <!-- Product Image -->
            <div class="md:w-1/3 p-4 relative">
                <div class=" ">
                    <img src="https://rukminim2.flixcart.com/image/312/312/xif0q/computer/k/8/k/15-fa1226tx-gaming-laptop-hp-original-imah4bjbx8ctzdg6.jpeg"
                        alt="HP Victus Laptop" class="w-full h-auto object-cover rounded-lg" />
                    <button class="absolute top-2 right-2 text-red-500 hover:text-red-600 focus:outline-none">
                        <svg class="w-6 h-6 absolute top-0 right-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Product Details -->
            <div class="md:w-2/3 p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">HP Victus Gaming Laptop</h1>
                <p class="text-sm text-gray-600 mb-4">Intel Core i5 12th Gen 12450H - (8 GB/512 GB SSD/Windows 11 Home/4
                    GB Graphics/NVIDIA GeForce RTX 2050)</p>

                <div class="flex items-center mb-4">
                    <span class="bg-green-500 text-white text-sm font-semibold px-2.5 py-0.5 rounded">4.5 ★</span>
                    <span class="text-sm text-gray-500 ml-2">1,234 reviews</span>
                </div>

                <ul class="text-sm text-gray-700 mb-6">
                    <li class="flex items-center mb-1"><svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>Core i5 Processor (12th Gen)</li>
                    <li class="flex items-center mb-1"><svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>8 GB DDR4 RAM</li>
                    <li class="flex items-center mb-1"><svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>Windows 11 Home</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>512 GB SSD</li>
                </ul>

                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-3xl font-bold text-gray-900">$899.00</span>
                        <span class="ml-2 text-sm font-medium text-gray-500 line-through">$1,000.00</span>
                    </div>
                    <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Save 10%</span>
                </div>

                <p class="text-green-600 text-sm font-semibold mb-4">Free Delivery</p>
            </div>
        </div>
    </div>

    <!-- component -->

    <div class="flex flex-col justify-center items-center  ">
        <div
            class="mx-auto flex w-full mt-20 flex-col justify-center px-5 pt-0 md:h-[unset] max-w-[520px] lg:px-6 xl:pl-0">
            <div class="relative flex w-full flex-col pt-[20px] md:pt-0">
                <div
                    class="rounded-lg border bg-card text-card-foreground shadow-sm mb-5 h-min flex items-center aligh-center max-w-full py-8 px-4 dark:border-zinc-800">
                    <span
                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full min-h-[68px] min-w-[68px]"><img
                            class="aspect-square h-full w-full"
                            src="https://lh3.googleusercontent.com/a/ACg8ocKIWdfb7aIybpzBFfDOHi2TyFWvW73xKa2hXx8Zw1Xzoz62T18=s96-c" /></span>
                    <div>
                        <p class="text-xl font-extrabold text-zinc-950 leading-[100%] dark:text-white pl-4 md:text-3xl">
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
</x-app-layout>
