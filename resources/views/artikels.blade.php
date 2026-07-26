<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    @foreach ($artikels as $artikel)
    <article class="py-8 max-w-screen-md border-gray-500">
        <a href="/artikels/{{ $artikel ['slug']}}"  class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold textgrey-900">{{ $artikel ['title']}}</h2>
        </a>
        <div class="text-base text-grey-500">
            <a href="#">{{ $artikel ['author'] }}</a> | {{ $artikel->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{Str::limit ($artikel ['body'],150) }}
        </p>
        <a href="/artikels/{{ $artikel ['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
</x-layout>