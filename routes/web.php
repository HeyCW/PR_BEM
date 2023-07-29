<?php

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
    $blog_posts = [[
        "title" => "Judul Posts Pertama",
        "author" => "Charles Wijaya",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere veritatis qui reiciendis voluptatum in aut eveniet numquam recusandae nisi accusamus perferendis, eligendi, vel, non velit eaque vero odit culpa voluptatibus perspiciatis fugiat? Labore aliquam, possimus praesentium inventore iure neque doloremque sint nemo exercitationem eveniet laborum maiores nihil delectus ipsa distinctio voluptatem enim libero temporibus assumenda voluptates adipisci tempore recusandae. Alias corporis nulla, laboriosam velit tempore quis laudantium non similique id unde autem necessitatibus vitae facere, reprehenderit asperiores. Numquam, similique ut.",
    ],[
        "title" => "Judul Posts Kedua",
        "author" => "Elena Erensia",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere veritatis qui reiciendis voluptatum in aut eveniet numquam recusandae nisi accusamus perferendis, eligendi, vel, non velit eaque vero odit culpa voluptatibus perspiciatis fugiat? Labore aliquam, possimus praesentium inventore iure neque doloremque sint nemo exercitationem eveniet laborum maiores nihil delectus ipsa distinctio voluptatem enim libero temporibus assumenda voluptates adipisci tempore recusandae. Alias corporis nulla, laboriosam velit tempore quis laudantium non similique id unde autem necessitatibus vitae facere, reprehenderit asperiores. Numquam, similique ut.",
    ]];
    
    return view('posts',[
        'title' => "Posts",
        'posts' => $blog_posts,
    ]);
});
