<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

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

Route::get('/', [PostController::class, 'home']);

Route::get('/about', [PostController::class, 'about']);


Route::get('/blog', [PostController::class, "index"]);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});

Route::get('categories/', function (){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('users/{author:username}', function (User $author){
    return view('user',[
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});