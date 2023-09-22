<?php

use Illuminate\Support\Facades\Route;

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

// WEBSITE PART

Route::get('/', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/shop', function () {
    return view('website.shop');
});

Route::get('/blog', function () {
    return view('website.blog');
});

Route::get('/checkout', function () {
    return view('website.checkout');
});

Route::get('/contact', function () {
    return view('website.contact');
});

// ADMIN PART



//AUTH PART

Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
