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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
// only available for admin// use auth middleware// give it a name
use App\Http\Controllers\DonationsController;

Route::resource('/donate', 'App\Http\Controllers\DonationsController');


Route::get('/admin', function () {
    return view('about');
})->middleware('auth');

