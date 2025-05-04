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
                'author' => 'Jepss',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quaerat sit voluptatem optio accusantium
                cupiditate omnis ea quis vitae nobis doloremque illo, incidunt eveniet consequuntur id, necessitatibus ad
                odit inventore!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Jeps2',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quaerat sit voluptatem optio accusantium
                cupiditate omnis ea quis vitae nobis doloremque illo, incidunt eveniet consequuntur id, necessitatibus ad
                odit inventore!'
            ]
        ];
    }
    public static function find($slug): array
    {

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            // 404
            abort(404);
        }
        return $post;
    }
}
