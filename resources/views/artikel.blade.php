<x-layout>
    <x-slot:header>{{$title}}</x-slot:header>
    
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">

                    <a href="/artikels" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to all artikels </a>
                    
                    <address class="flex items-center mb-6 not-italic mt-4">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Author Picture">
                            <div>

                                <a href="/artikels?author={{$artikel->author?->username}}" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{$artikel->author?->name ?? 'Anonim'}}</a>
                                <p class="text-base dark:text-gray-400 text-gray-500 mb-1">{{$artikel->created_at->diffForHumans()}}</p>
                                
                                <p>

                                    <a href="/artikels?category={{$artikel->category?->slug}}">
                                        <span class="text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded 
                                            @if($artikel->category?->color == 'red') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300
                                            @elseif($artikel->category?->color == 'blue') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300
                                            @elseif($artikel->category?->color == 'green') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                            @elseif($artikel->category?->color == 'violet') bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300
                                            @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300
                                            @endif">
                                            
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                                            </svg>
                                            
                                            {{$artikel->category?->name ?? 'Tanpa Kategori'}}
                                        </span>
                                    </a>
                                    <span class="text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded 
                                            @if($artikel->level?->color == 'red') bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-350
                                            @elseif($artikel->level?->color == 'blue') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300
                                            @elseif($artikel->level?->color == 'violet') bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-300
                                            @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300
                                            @endif">
                                        {{ $artikel->level?->nama_level ?? 'Level' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$artikel['title']}}</h1>
                </header>
                
                <div class="text-gray-700 dark:text-gray-300">
                    {!! nl2br(e($artikel['body'])) !!}
                </div>
            </article>
        </div>
    </main>
</x-layout>