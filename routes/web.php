<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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
    return view('posts',[
        'title' => $category->name,
        'posts' => $category->posts->load('author'),
        'category' => $category->name,
        'page' => "Post By Category :" . $category->name,
    ]);
});

Route::get('categories/', function (){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('users/{author:username}', function (User $author){
    return view('posts',[
        'title' => 'User Posts',
        'posts' => $author->posts->load('category'),
        'page' => "Post By Author: " . $author ->name,
    ]);
});

Route::get('/dashboard', function(){
    return view("dashboard.index",[
        "title" => "Dashboard",
    ]);
})->middleware("auth");

Route::get('/login', [LoginController::class, 'index'])->middleware("guest")->name("login");

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/login', [LoginController::class, 'check'])->name("cek");

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware("auth");

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware("auth");




