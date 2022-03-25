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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', [
        "name" => "Marcel Dwi Astika",
        "email" => "marceldwias@gmail.com"
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about', [
        "name" => "Marcel Dwi Astika",
        "email" => "marceldwias@gmail.com"
    ]);
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/feed', function () {
    return view('feed');
});
Route::get('/form-login', function () {
    return view('form-login');
});
Route::get('/form-register', function () {
    return view('form-register');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/market', function () {
    return view('market');
});
Route::get('/pages-terms', function () {
    return view('pages-terms');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/trending', function () {
    return view('trending');
});
