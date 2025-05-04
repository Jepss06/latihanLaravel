<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});

Route::get('/About', function () {
    return view('About', ['title' => 'About', 'page' => 'About']);
});
Route::get('/Posts', function () {
    return view('Posts', ['title' => 'Blog', 'page' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/Posts/{slug}', function ($slug) {
    return view('Post', ['title' => 'Single Post', 'post' => Post::find($slug)]);
});

Route::get('/Contact', function () {
    return view('Contact', ['title' => 'Contact', 'page' => 'Contact']);
});
