<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Faiz Ali Sidiq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iste minus deserunt sapiente, earum, cum libero labore qui dolores optio eaque accusantium. Dolore assumenda sit reiciendis eaque necessitatibus magni rem.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Faiz Ali Sidiq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod amet minima ipsam, optio quas totam sit maxime, impedit sequi commodi expedita quibusdam maiores ab deserunt repellendus error iusto? Odio, quo.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Faiz Ali Sidiq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iste minus deserunt sapiente, earum, cum libero labore qui dolores optio eaque accusantium. Dolore assumenda sit reiciendis eaque necessitatibus magni rem.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Faiz Ali Sidiq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod amet minima ipsam, optio quas totam sit maxime, impedit sequi commodi expedita quibusdam maiores ab deserunt repellendus error iusto? Odio, quo.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
