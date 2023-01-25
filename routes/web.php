<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('about', [
        "title" => "About",
        "name" => "Reze",
        "email" => "rezezere@gmail.com"
    ]);
});



Route::get('/posts', [PostController::class, 'show']);
Route::get('/posts/{post:slug}', [PostController::class, 'index']);


Route::get('/category', [CategoryController::class, 'show']); 
Route::get('/category={category:slug}', [CategoryController::class, 'index']);

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/{user:username}', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::get('/dashboard/posts/all', [DashboardPostController::class, 'showAll'])->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->scoped([
    'category' => 'slug'
])->except('destroy')->middleware('admin');

Route::prefix('/dashboard/users')->group(function () {
    Route::get('/posts/{user:username}', [AdminUserController::class, 'post']);
    Route::get('/profile/{user:username}', [AdminUserController::class, 'userProfile']);
})->middleware('admin');

Route::get('/dashboard/users', [AdminUserController::class, 'index'])->middleware('admin');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

// Route::get('/settings', [DashboardController::class, 'index'])->middleware('auth');

//Route::resource('/dashboard/allpo', AllPostController::class)->middleware('admin');