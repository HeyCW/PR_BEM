<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'category_id',
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body',
    //     'published_at'
    // ];

    public function scopeFilter($query, array $filters){
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //              ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters["search"]??false, function($query, $search){
            $query->where('title', 'like', '%' . $search . '%')
                     ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category']??false, function($query, $category){
            $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });

        });

    }

    protected $guarded = ['id'];    

    protected $with = ['author', 'category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

// Post::create([
//     "category_id" => 1,
//     "title" => "Judul Keempat",
//     "slug" => "judul-keempat",
//     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quidem.",
//     "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illo praesentium, libero accusamus quia consectetur atque quod sit, nisi dolorum tenetur ipsam maxime fuga non est possimus! Necessitatibus possimus, eos quibusdam explicabo quidem nesciunt deserunt eius sapiente quisquam magni doloremque vel tenetur iste asperiores incidunt! Tempore, quos perferendis dolore quibusdam quas iste molestiae eius earum? Quasi reprehenderit dolore, voluptatum expedita quaerat natus fugiat culpa obcaecati architecto, non nobis blanditiis! Nisi sequi doloremque nulla illum ab obcaecati nostrum quidem beatae non minus cumque dolorem perferendis dolorum nobis laborum odit maiores dolore temporibus, facilis voluptatibus quis iusto nam illo. Ut, tempore alias."])
