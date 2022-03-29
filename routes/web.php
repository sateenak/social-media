<?php

use App\Http\Controllers\PostingController;
use App\Models\Category;
use App\Models\Posting;
use App\Models\User;
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

Route::get('/', [PostingController::class, 'index']);
Route::get('/chat', [PostingController::class, 'chat']);
Route::get('/explore', [PostingController::class, 'explore']);
Route::get('/feed', [PostingController::class, 'index']);
Route::get('/form-login', [PostingController::class, 'login']);
Route::get('/form-register', [PostingController::class, 'register']);
Route::get('/pages-terms', [PostingController::class, 'pages']);
Route::get('/profile', [PostingController::class, 'profile']);
Route::get('/setting', [PostingController::class, 'setting']);
Route::get('/trending', [PostingController::class, 'trending']);
Route::get('/coba', [PostingController::class, 'coba']);
Route::get('/coba/{post:slug}', [PostingController::class, 'detail']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => "Categories",
        'categories' => Category::all(),
    ]);
});
Route::get('categories/{categories:slug}', function (Category $categories) {
    return view('category', [
        'title' => $categories->name,
        'posts' => $categories->post,
        'category' => $categories->name
    ]);
});
Route::get('/author/{author:username}', function (User $author) {
    return view('coba', [
        'judul' => "User Post",
        'post' => $author->posting,
    ]);
});
