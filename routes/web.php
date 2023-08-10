<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fatsha Gaghana Jamel Ichsan",
        "email" => "jamel@gmail.com",
        "image" => "joko.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/test', function () {
    return view('appa');
});
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
Route::get('/category/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category', 'user')
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/authors/{user:username}', function (User $user) {
    return view('blog', [
        'title' => "Post by Author : $user->name",
        'posts' => $user->post->load('category', 'user')
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/settings', [SettingController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/logins', function(){
    return view('test');
});
Route::get('/side', function(){
    return view('partial.sidebar-test');
});

