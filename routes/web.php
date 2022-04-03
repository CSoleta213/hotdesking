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

Route::get('/', [App\Http\Controllers\BookController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/features', [App\Http\Controllers\HomeController::class, 'features'])->name('features');

Route::get('/features/desk-map', [App\Http\Controllers\HomeController::class, 'desk_map'])->name('desk_map');

Route::get('/features/desk-map/book-a-desk', [App\Http\Controllers\HomeController::class, 'book_a_desk'])->name('book_a_desk');

Route::post('/book-a-desk', [App\Http\Controllers\BookController::class, 'save_book']);

Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
