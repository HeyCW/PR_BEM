<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    User::create([
        'name' => 'Charles Wijaya',
        'username' => 'cw',
        'email' => 'cw@gmail.com',
        'password' => bcrypt('1234')
    ]);  
    
    // User::create([
    //     'name' => 'Elena Erensia',
    //     'email' => 'ele@gmail.com',
    //     'password' => bcrypt('123')
    // ]);    

    // Post::create([
    // "user_id" => 1,
    // "category_id" => 1,
    // "title" => "Judul Pertama",
    // "slug" => "judul-pertama",
    // "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quidem.",
    // "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illo praesentium, libero accusamus quia consectetur atque quod sit, nisi dolorum tenetur ipsam maxime fuga non est possimus! Necessitatibus possimus, eos quibusdam explicabo quidem nesciunt deserunt eius sapiente quisquam magni doloremque vel tenetur iste asperiores incidunt! Tempore, quos perferendis dolore quibusdam quas iste molestiae eius earum? Quasi reprehenderit dolore, voluptatum expedita quaerat natus fugiat culpa obcaecati architecto, non nobis blanditiis! Nisi sequi doloremque nulla illum ab obcaecati nostrum quidem beatae non minus cumque dolorem perferendis dolorum nobis laborum odit maiores dolore temporibus, facilis voluptatibus quis iusto nam illo. Ut, tempore alias."
    // ]);

    // Post::create([
    //     "user_id" => 2,
    //     "category_id" => 1,
    //     "title" => "Judul Kedua",
    //     "slug" => "judul-kedua",
    //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quidem.",
    //     "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illo praesentium, libero accusamus quia consectetur atque quod sit, nisi dolorum tenetur ipsam maxime fuga non est possimus! Necessitatibus possimus, eos quibusdam explicabo quidem nesciunt deserunt eius sapiente quisquam magni doloremque vel tenetur iste asperiores incidunt! Tempore, quos perferendis dolore quibusdam quas iste molestiae eius earum? Quasi reprehenderit dolore, voluptatum expedita quaerat natus fugiat culpa obcaecati architecto, non nobis blanditiis! Nisi sequi doloremque nulla illum ab obcaecati nostrum quidem beatae non minus cumque dolorem perferendis dolorum nobis laborum odit maiores dolore temporibus, facilis voluptatibus quis iusto nam illo. Ut, tempore alias."
    // ]);

    // Post::create([
    //     "user_id" => 1,
    //     "category_id" => 2,
    //     "title" => "Judul Ketiga",
    //     "slug" => "judul-ketiga",
    //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quidem.",
    //     "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illo praesentium, libero accusamus quia consectetur atque quod sit, nisi dolorum tenetur ipsam maxime fuga non est possimus! Necessitatibus possimus, eos quibusdam explicabo quidem nesciunt deserunt eius sapiente quisquam magni doloremque vel tenetur iste asperiores incidunt! Tempore, quos perferendis dolore quibusdam quas iste molestiae eius earum? Quasi reprehenderit dolore, voluptatum expedita quaerat natus fugiat culpa obcaecati architecto, non nobis blanditiis! Nisi sequi doloremque nulla illum ab obcaecati nostrum quidem beatae non minus cumque dolorem perferendis dolorum nobis laborum odit maiores dolore temporibus, facilis voluptatibus quis iusto nam illo. Ut, tempore alias."
    // ]);


    }
}
