<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-b">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-4xl tracking-tighter font-bold">{{ $post['title'] }}</h2>
        </a>
        <div>
            By
            <a href="/users/{{ $post->user->username }}" class="hover:underline text-gray-400">{{ $post->user->name }}</a>
            In <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-400">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Baca Selengkapnya &raquo;</a>
    </article>

    @endforeach

</x-layout>
