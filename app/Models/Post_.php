<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // Menggunakan array untuk menyimpan post yang sesuai dengan slug
        return $posts->firstWhere('slug', $slug);
    }
}
