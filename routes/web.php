<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});

Route::get('/About', function () {
    return view('About', ['title' => 'About', 'page' => 'About']);
});
Route::get('/Posts', function () {
    return view('Posts', ['title' => 'Blog', 'page' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Jepss',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quaerat sit voluptatem optio accusantium
            cupiditate omnis ea quis vitae nobis doloremque illo, incidunt eveniet consequuntur id, necessitatibus ad
            odit inventore!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Jeps2',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quaerat sit voluptatem optio accusantium
            cupiditate omnis ea quis vitae nobis doloremque illo, incidunt eveniet consequuntur id, necessitatibus ad
            odit inventore!'
        ]
    ]]);
});
Route::get('/Contact', function () {
    return view('Contact', ['title' => 'Contact', 'page' => 'Contact']);
});
