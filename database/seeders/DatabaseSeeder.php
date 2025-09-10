<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $faiz = User::create([
        //     'name' => 'Faiz Ali Sidiq',
        //     'username' => 'faizalisidiq',
        //     'email' => 'faizalisidiq@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        //         Category::create([
        //             'name' => 'Web Programming',
        //             'slug' => 'web-programming',

        //         ]);

        //         Post::create([
        //             'title' => 'Judul Pertama',
        //             'user_id' => 1,
        //             'category_id' => 1,
        //             'slug' => 'judul-pertama',
        //             'body' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.
        // <br>
        // Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.

        // Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. Well help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We cant wait to see what you build.',
        //         ]);

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);

        Post::factory(10)->recycle([
            Category::all(),
            User::all(),
            // Category::factory(3)->create(),
            // $faiz,
            // User::factory(3)->create()
        ])->create();
    }
}
