<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home",[
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'name' => "Charles Wijaya",
        'email' => "c14220046@john.petra.ac.id",
        'image' => "Foto.jpg",
        'title' => "About",
    ]);
});


Route::get('/blog', function () {

    
    return view('posts',[
        'title' => "Posts",
        'posts' => Post::all(),
    ]);
});

Route::get('posts/{slug}', function($slug){



    return view('post',[
        'title' => 'Single Posts',
        'posts' => Post::all(),
        'slug' => $slug,

    ]);
});