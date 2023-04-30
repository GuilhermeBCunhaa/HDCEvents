<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Eventcontroller;
use App\http\Controllers\ContactController;

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

Route::get('/', [Eventcontroller::class, 'index']);
Route::get('/events/create', [Eventcontroller::class, 'create']);
Route::get('events/{id}', [Eventcontroller::class, 'show']);
Route::post('/events', [Eventcontroller::class, 'store']);

Route::get('/contact', function() {
    return view('contact');
});
