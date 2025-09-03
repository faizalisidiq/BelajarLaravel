<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        // return $post['slug'] == $slug;

        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
