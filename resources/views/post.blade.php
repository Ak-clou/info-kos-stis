<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Info kosan tersedia.</h3>   
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            <a href="#">Anton</a> | {{ $post->created_at->format('j F Y') }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-500 hover::underline">Back to article &laquo;</a>
    </article>
</x-layout>

