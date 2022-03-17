<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookerController;

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

Route::view('/', 'welcome');

Route::view('/features', 'features');

Route::view('/faqs', 'faqs');

Route::view('/demo', 'demo');

Route::view('/log-in', 'log-in');

Route::view('/sign-up', 'sign-up');

Route::post('/signed-up', [BookerController::class, 'store']);

Route::post('/logged-in', [BookerController::class, 'login']);
