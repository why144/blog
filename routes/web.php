<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Budi Luhur",
        "email" => "budiluhur@gmail.com",
        "profile" => "profile.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Budi Luhur",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate mollitia perspiciatis odio libero, id sequi, aspernatur fugiat sed delectus aliquam atque tempora neque placeat fugit corporis quasi. Eos, ipsa mollitia."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Budi Luhur",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate mollitia perspiciatis odio libero, id sequi, aspernatur fugiat sed delectus aliquam atque tempora neque placeat fugit corporis quasi. Eos, ipsa mollitia."
    ],
];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug) {
        $blog_post = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Budi Luhur",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate mollitia perspiciatis odio libero, id sequi, aspernatur fugiat sed delectus aliquam atque tempora neque placeat fugit corporis quasi. Eos, ipsa mollitia."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Budi Luhur",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate mollitia perspiciatis odio libero, id sequi, aspernatur fugiat sed delectus aliquam atque tempora neque placeat fugit corporis quasi. Eos, ipsa mollitia."
            ],
        ];

        $new_post = [];
        foreach ($blog_post as $post) {
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

        return view('post', [
            "title" => "Single Post",
            'post' => $new_post
        ]);
});
