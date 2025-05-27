<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/blog', [PostController::class, 'index']);

//Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load(['user', 'category']),
    ]);
});

Route::get('/categories', function() {

    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()->sortBy('name')
    ]);
});

Route::get('/authors/{user:username}', function(User $user) {

    return view('posts', [
        'title' => "Post By Author : $user->name",
        'posts' => $user->posts->load(['user', 'category']),
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);