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

Route::get('/test', function () {
    return view('test');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/event', function () {
    return view('album');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/form', function () {
    return view('contact');
});

use App\Http\Controllers\DonationsController;
Route::post('/contact_us', [DonationsController::class, 'contactUs'])->name('contact_us');
Route::post('/volunteer', [DonationsController::class, 'volunteer']);
Route::resource('/donates', DonationsController::class);
// only available for admin// use auth middleware// give it a name



Route::get('/admin', [DonationsController::class, 'admin']);

