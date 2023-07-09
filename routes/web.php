<?php

//Import class Controller
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

//Route untuk page home (landing page)
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

//Route untuk page about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Reze",
        "email" => "rezezere@gmail.com"
    ]);
});


//Route untuk menapilkan semua post
Route::get('/posts', [PostController::class, 'show']);

//Route untuk menampilkan 1 post terpilih
Route::get('/posts/{post:slug}', [PostController::class, 'index']);

//Route untuk menampilkan semua kategori
Route::get('/category', [CategoryController::class, 'show']);

//Route untuk menampilkan semua post berdasarkan kategori terpilih
Route::get('/category={category:slug}', [CategoryController::class, 'index']);

//Route untuk menampilkan semua user
Route::get('/user', [UserController::class, 'show']);

//Route untuk menampilkan semua post yang dimiliki user
Route::get('/user/{user:username}', [UserController::class, 'index']);

//Route untuk page login dan function logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route untuk page register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Route untuk page dashboard yang hanya dapat diakses setelah terauthentikasi
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

//Route untuk memastikan kesesuaian slug/unique yang hanya dapat diakses setelah terauthentikasi
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

//Route untuk menampilkan semua post yang tersedia dan hanya dapat diakses oleh admin
Route::get('/dashboard/posts/all', [DashboardPostController::class, 'showAll'])->middleware('admin');

//Route untuk CRUD post dan menampilkan post yang user miliki dan hanya dapat diakses oleh user tsb
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//Route untuk memastikan kesesuaian slug/unique pada kateogri dan hanya dapat diakses oleh admin
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('admin');

//Route untuk crud kategori dan hanya dapat diakses oleh admin
Route::resource('/dashboard/categories', AdminCategoryController::class)->scoped([
    'category' => 'slug'
])->except('destroy')->middleware('admin');

//Route untuk grup prefix yang diawali oleh /dashboard/user dan hanya dapat diakses oleh admin
Route::prefix('/dashboard/users')->group(function () {
    Route::get('/posts/{user:username}', [AdminUserController::class, 'post']);
    Route::get('/profile/{user:username}', [AdminUserController::class, 'userProfile']);
})->middleware('admin');


//Route untuk menampilkan semua pengguna dan hanya dapat diakses oleh admin
Route::get('/dashboard/users', [AdminUserController::class, 'index'])->middleware('admin');

//Route untuk menampilkan salah satu profil user dan dapat di akses oleh semua user yang terauthentikasi
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

