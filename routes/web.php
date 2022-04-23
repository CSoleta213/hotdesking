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

Route::view('/','welcome');

Route::view('/privacy','privacy.privacy');

Route::view('/terms','privacy.terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'my_profile'])->name('my_profile');

Route::get('/my-calendar/monthly', [App\Http\Controllers\HomeController::class, 'my_calendar_monthly'])->name('my_calendar_monthly');

Route::get('/my-calendar/weekly', [App\Http\Controllers\HomeController::class, 'my_calendar_weekly'])->name('my_calendar_weekly');

Route::get('/features', [App\Http\Controllers\HomeController::class, 'features'])->name('features');

Route::get('/office-map', [App\Http\Controllers\HomeController::class, 'office_map'])->name('office_map');

Route::post('/book-a-desk', [App\Http\Controllers\BookController::class, 'save_book']);

Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/users', [App\Http\Controllers\HomeController::class, 'adminUsersList'])->name('admin.users_list')->middleware('is_admin');

Route::get('/admin/bookings', [App\Http\Controllers\HomeController::class, 'adminBookings'])->name('admin.bookings')->middleware('is_admin');

Route::resource('books', App\Http\Controllers\BookController::class);
