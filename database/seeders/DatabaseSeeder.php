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
        User::factory(5)->create();

        Category::create([
            'name' => 'Desain Grafis',
            'slug' => 'desain-grafis',
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Post::factory(20)->create();
    }
}
