<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::latest();

        // if (request('search')) {
        //     Post::filter()->latest()->get();
        // }

        return view('posts',[
            'title' => "Posts",
            'posts' => Post::filter(request(['search', 'category']))->latest()->get(),
            'page' => "Halaman Posts"
            // 'posts' => Post::all(),
        ]);

    }

    public function home(){

        return view("home",[
            'title' => "Home"
        ]);

    }

    public function about(){

        return view('about',[
            'name' => "Charles Wijaya",
            'email' => "c14220046@john.petra.ac.id",
            'image' => "Foto.jpg",
            'title' => "About",
        ]);

    }

    public function show(Post $post){
        return view('post',[
            'title' => 'Single Posts',
            'post' => $post,
    
        ]);

    }

}
