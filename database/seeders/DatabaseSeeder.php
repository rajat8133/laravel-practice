<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        /* User::truncate();
         Post::truncate();
         Category::truncate();*/

        $user = User::factory()->create([
            'name' => 'Rajat Prashar',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

        /*  $user = user::factory()->create();

           $personal = Category::create([
               'name' => 'Personal',
               'slug' => 'Personal',
           ]);

           $family = Category::create([
               'name' => 'Family',
               'slug' => 'Family',
           ]);

           $work = Category::create([
               'name' => 'Work',
               'slug' => 'Work',
           ]);

           Post::create([
               'user_id' => $user->id,
               'category_id' => $family->id,
               'title' => 'My Family Post',
               'slug' => 'my-family-post',
               'excerpt' => '<p>Laravel is a web application framework with expressive.<\p>',
               'body' => '<p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.<p>',

           ]);

           Post::create([
               'user_id' => $user->id,
               'category_id' => $work->id,
               'title' => 'My Work Post',
               'slug' => 'my-work-post',
               'excerpt' => '<p>Laravel is a web application framework with expressive.<\p>',
               'body' => '<p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.<\p>',

           ]);*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
