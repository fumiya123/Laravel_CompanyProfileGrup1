<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    
    <article class="py-8 max-w-screen-md border-gray-500">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $artikel->title }}</h2>

        <div class="text-base text-gray-500">
            <a href="#">{{ $artikel->author }}</a> | {{ \Carbon\Carbon::parse($artikel['created_at'])->diffForHumans() }}
        </div>
        
        <p class="my-4 font-light">
            {{ $artikel->body }}
        </p>
        
        <a href="/artikels" class="font-medium text-blue-500 hover:underline">&laquo; back to Posts</a>
    </article>
</x-layout>