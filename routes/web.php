<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File; 
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
    
});

Route::get('posts/{post}', function ($slug) {
    $post = Post::findOrFail($slug);
    return view('post',[
        'post' => $post
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
