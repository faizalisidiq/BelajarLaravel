<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-b border-white">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline text-white">
            <h2 class="mb-1 text-4xl tracking-tighter font-bold text-white">{{ $post['title'] }}</h2>
        </a>
        <div class="text-white">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="text-white my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Baca Selengkapnya &raquo;</a>
    </article>

    @endforeach

</x-layout>
