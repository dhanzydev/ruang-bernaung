<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/story-store', [IndexController::class, 'store'])->name('story-index.store');
Route::post('/contact-us', [IndexController::class, 'contact'])->name('contact-us.store');


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/kts', function () {
    return view('kts');
});
Route::get('/katamereka', function () {
    return view('katamereka');
});
Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/ulasan', function () {
    return view('ulasan');
});
Route::get('/signup', function () {
    return view('signup');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
