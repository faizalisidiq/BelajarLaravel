<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-4xl tracking-tighter font-bold">{{ $post['title'] }}</h2>

        <div class="">
            <a href="#">{{ $post->user->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>

        <p class="my-4 font-light">{{ $post['body'] }}</p>
        @if (str_contains(url()->previous(), '/users/'))
        <a href="/users/{{ $post->user->username }}" class="font-medium text-blue-500 hover:underline">&laquo; Kembali Ke Blog </a>
        @elseif (str_contains(url()->previous(), '/categories/'))
        <a href="/categories/{{ $post->category->slug }}" class="font-medium text-blue-500 hover:underline">&laquo; Kembali Ke Blog </a>
        @else
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Kembali Ke Blog </a>
        @endif
    </article>

</x-layout>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quia nemo molestias illum quidem tenetur error architecto rerum odit sapiente officia ex laboriosam, reiciendis debitis in. Provident, magnam veritatis. Itaque.
