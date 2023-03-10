<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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
    return view('mainpage');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/gallery', function() {
    return view('gallery');
});

Route::get('/galleryA', function() {
    return view('galleryA');
});

Route::get('/galleryB', function() {
    return view('galleryB');
});

Route::get('/galleryC', function() {
    return view('galleryC');
});

Route::get('/galleryD', function() {
    return view('galleryD');
});

Route::get('/booking', function() {
    return view('booking');
});

Route::get('/booking', [BookingController::class, 'index']);
Route::resource('/bookings', BookingController::class);

Route::get('/bookingDetail', [BookingController::class, 'bookd']);

            


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
