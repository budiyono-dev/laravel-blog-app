<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "budi",
        "email" => "budiyono.dev@gmail.com"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     // dd($category->posts);
//     return view('category',[
//         "title" => $category->name,
//         "posts" => $category->posts,
//         "category" => $category->name
//     ]);
// });

Route::get('/categories/{category:slug}', function (Category $category) {
    // dd($category->posts);
    return view('posts', [
        "title" => "Post Categories :  $category->name",
        "posts" => $category->posts->load("category", "user"),
        "category" => $category->name
    ]);
});

// Route::get('/author/{user:username}', function(User $user){
//     // dd($category->posts);
//     return view('posts',[
//         "title" => "Post by Author : $user->name",
//         "posts" => $user->posts,
//     ]);
// });

//lazy eager laoding 
Route::get('/author/{user:username}', function (User $user) {
    // dd($category->posts);
    return view('posts', [
        "title" => "Post by Author : $user->name",
        "posts" => $user->posts->load("category", "user"),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'doLogin']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);