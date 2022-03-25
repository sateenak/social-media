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
    return view('feed', [
        "title" => "Beranda"
    ]);
});
Route::get('/chat', function () {
    return view('chat', [
        "title" => "Chatting"
    ]);
});
Route::get('/explore', function () {
    return view('explore', [
        "title" => "Jelajahi"
    ]);
});
Route::get('/feed', function () {
    return view('feed', [
        "title" => "Beranda"
    ]);
});
Route::get('/form-login', function () {
    return view('form-login', [
        "title" => "Menu-Login"
    ]);
});
Route::get('/form-register', function () {
    return view('form-register', [
        "title" => "Menu-Register"
    ]);
});
Route::get('/pages-terms', function () {
    return view('pages-terms');
});
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});
Route::get('/setting', function () {
    return view('setting', [
        "title" => "Setting"
    ]);
});
Route::get('/trending', function () {
    return view('trending', [
        "title" => "Trending"
    ]);
});
