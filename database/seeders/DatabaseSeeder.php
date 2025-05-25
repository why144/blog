<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
         Post::create([
            'title' => 'Judul Post Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'lorem ipsum pertama',
            'slug' => 'judul-post-pertama', 
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati vel neque ratione nulla libero provident repellendus, nihil dolor quisquam officia ab esse dolore tenetur voluptates, incidunt dicta molestiae voluptatem in amet ipsum commodi accusamus. Recusandae qui mollitia officiis sit totam perspiciatis odit nesciunt repudiandae error quibusdam, debitis, eius quod asperiores atque non, autem adipisci rerum dolore sint nulla! Atque, ab?</p> <p>Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
        ]); 
         Post::create([
            'title' => 'Judul Post Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'excerpt' => 'lorem ipsum kedua',
            'slug' => 'judul-post-kedaua', 
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati vel neque ratione nulla libero provident repellendus, nihil dolor quisquam officia ab esse dolore tenetur voluptates, incidunt dicta molestiae voluptatem in amet ipsum commodi accusamus. Recusandae qui mollitia officiis sit totam perspiciatis odit nesciunt repudiandae error quibusdam, debitis, eius quod asperiores atque non, autem adipisci rerum dolore sint nulla! Atque, ab?</p> <p>Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
        ]); 
         Post::create([
            'title' => 'Judul Post Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'excerpt' => 'lorem ipsum ketiga',
            'slug' => 'judul-post-ketiga', 
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati vel neque ratione nulla libero provident repellendus, nihil dolor quisquam officia ab esse dolore tenetur voluptates, incidunt dicta molestiae voluptatem in amet ipsum commodi accusamus. Recusandae qui mollitia officiis sit totam perspiciatis odit nesciunt repudiandae error quibusdam, debitis, eius quod asperiores atque non, autem adipisci rerum dolore sint nulla! Atque, ab?</p> <p>Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
        ]); 

            Post::create([
            'title' => 'Judul Post Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'excerpt' => 'lorem ipsum keempat',
            'slug' => 'judul-post-keempat', 
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati vel neque ratione nulla libero provident repellendus, nihil dolor quisquam officia ab esse dolore tenetur voluptates, incidunt dicta molestiae voluptatem in amet ipsum commodi accusamus. Recusandae qui mollitia officiis sit totam perspiciatis odit nesciunt repudiandae error quibusdam, debitis, eius quod asperiores atque non, autem adipisci rerum dolore sint nulla! Atque, ab?</p> <p>Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
        ]); 

        Category::create([
            'name' => 'Desain Grafis',
            'slug' => 'desain-grafis',
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        User::create([
            'name' => 'Budi Luhur',
            'email' => 'budiluhur@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Trafgra Law',
            'email' => 'torao@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
