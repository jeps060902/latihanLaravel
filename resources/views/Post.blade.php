<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
            {{ $post['title'] }}
        </h2>
        <div class="text-base text-gray-500">
            <a href="/author/{{ $post->author->id }}">{{ $post->author->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/Posts" class="font-medium text-blue-500 hover:underline">&laquo; Back To Post</a>
    </article>
</x-layout>
