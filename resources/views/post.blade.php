<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-4xl tracking-tighter font-bold text-white">{{ $post['title'] }}</h2>

        <div class="text-white">
            <a href="#">{{ $post['author'] }}</a> | 02 September 2025
        </div>

        <p class="text-white my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Kembali Ke Blog </a>
    </article>

</x-layout>
