<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-posts-pertama",
        "author" => "Charles Wijaya",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere veritatis qui reiciendis voluptatum in aut eveniet numquam recusandae nisi accusamus perferendis, eligendi, vel, non velit eaque vero odit culpa voluptatibus perspiciatis fugiat? Labore aliquam, possimus praesentium inventore iure neque doloremque sint nemo exercitationem eveniet laborum maiores nihil delectus ipsa distinctio voluptatem enim libero temporibus assumenda voluptates adipisci tempore recusandae. Alias corporis nulla, laboriosam velit tempore quis laudantium non similique id unde autem necessitatibus vitae facere, reprehenderit asperiores. Numquam, similique ut.",
    ],
    [
        "title" => "Judul Posts Kedua",
        "slug" => "judul-posts-kedua",
        "author" => "Elena Erensia",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere veritatis qui reiciendis voluptatum in aut eveniet numquam recusandae nisi accusamus perferendis, eligendi, vel, non velit eaque vero odit culpa voluptatibus perspiciatis fugiat? Labore aliquam, possimus praesentium inventore iure neque doloremque sint nemo exercitationem eveniet laborum maiores nihil delectus ipsa distinctio voluptatem enim libero temporibus assumenda voluptates adipisci tempore recusandae. Alias corporis nulla, laboriosam velit tempore quis laudantium non similique id unde autem necessitatibus vitae facere, reprehenderit asperiores. Numquam, similique ut.",
    ]];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function search($slug){
        $posts = static::all();
        // foreach ($posts as $post) {
        //     if ($slug === $post["slug"]) {
        //         return $post;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
