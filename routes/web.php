<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeskController;
use Spatie\GoogleCalendar\Event;

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

// Route::view('/','welcome');

Route::get('/', function() {

    // $event = new Event;

    // $event->name = '';
    // $event->startDateTime = Carbon\Carbon::now();
    // $event->endDateTime = Carbon\Carbon::now()->addHour();

    // $event->save();

    // $e = Event::get();

    return view('welcome');
});

Route::view('/privacy','privacy.privacy');

Route::view('/terms','privacy.terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'my_profile'])->name('my_profile');

Route::get('/my-calendar', [App\Http\Controllers\HomeController::class, 'my_calendar'])->name('my_calendar');

Route::get('/features', [App\Http\Controllers\HomeController::class, 'features'])->name('features');

Route::get('/office-map', [App\Http\Controllers\HomeController::class, 'office_map'])->name('office_map');

Route::post('/book-a-desk', [App\Http\Controllers\BookController::class, 'save_book']);

Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo'])->name('demo');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/users', [App\Http\Controllers\HomeController::class, 'adminUsersList'])->name('admin.users_list')->middleware('is_admin');

Route::get('/admin/bookings', [App\Http\Controllers\HomeController::class, 'adminBookings'])->name('admin.bookings')->middleware('is_admin');

Route::get('/admin/calendar-view', [App\Http\Controllers\HomeController::class, 'adminCalendarView'])->name('admin.calendar_view')->middleware('is_admin');

Route::get('/admin/available-desks', [App\Http\Controllers\HomeController::class, 'adminAvailableDesks'])->name('admin.available_seats')->middleware('is_admin');

Route::resource('books', App\Http\Controllers\BookController::class);

Route::resource('/admin/desks', DeskController::class)->middleware('is_admin');
