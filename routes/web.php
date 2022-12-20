<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShareStoryController;
use App\Http\Controllers\UlasanController;

use App\Http\Controllers\Auth\LogoutController;
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
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/save-story', [DashboardController::class, 'store'])->name('story.store');
    Route::get('/kts', [ShareStoryController::class, 'index'])->name('kts');
    Route::get('/react/{id}', [ShareStoryController::class, 'react'])->name('react');
    Route::get('/katamereka', function () {
        return view('katamereka');
    });
    Route::get('/ourteam', function () {
        return view('ourteam');
    });
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan');
    Route::post('/save-ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
});

Auth::routes();
