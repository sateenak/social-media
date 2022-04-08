<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [PostingController::class, 'index']);
Route::get('/chat', [PostingController::class, 'chat']);
Route::get('/explore', [PostingController::class, 'explore']);
Route::get('/feed', [PostingController::class, 'index']);
Route::get('/form-login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/form-login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/form-register', [RegisterController::class, 'registrasi'])->middleware('guest');
Route::post('/form-register', [RegisterController::class, 'store']);
Route::get('/pages-terms', [PostingController::class, 'pages']);
Route::get('/profile', [PostingController::class, 'profile']);
Route::get('/setting', [PostingController::class, 'setting']);
Route::get('/trending', [PostingController::class, 'trending']);
Route::get('/coba', [PostingController::class, 'coba']);
Route::get('/coba/{post:slug}', [PostingController::class, 'detail']);
Route::get('/categories', function () {
    return view('categories', [
        'judul' => "Categories",
        'categories' => Category::all(),
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/posting/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug']);
Route::resource('/dashboard/posting', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
