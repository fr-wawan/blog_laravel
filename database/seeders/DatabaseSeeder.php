<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Hermawan',
            'email' =>'tes@gmail.com',
            'password' => bcrypt('root')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug'=> 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug'=> 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug'=> 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error beatae inventore, obcaecati deserunt ab totam neque, quasi maxime, consectetur quia veniam. Mollitia rem fugit dicta, consectetur unde dolore qui?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error beatae inventore, obcaecati deserunt ab totam neque, quasi maxime, consectetur quia veniam. Mollitia rem fugit dicta, consectetur unde dolore qui?',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero error beatae inventore, obcaecati deserunt ab totam neque, quasi maxime, consectetur quia veniam. Mollitia rem fugit dicta, consectetur unde dolore qui?',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
