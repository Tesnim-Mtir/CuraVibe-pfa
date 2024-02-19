<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    return view('home/welcome');
});
Route::get('/inscription', function () {
    return view('home/inscription');
});
Route::get('/don', function () {
    return view('home/don');
});



Route::get('/chats_page', [ChartController::class, 'chatsPage']);
use Laravel\Fortify\Fortify;

Fortify::loginView(function () {
    return view('home/inscription');
});

Fortify::registerView(function () {
    return view('home/inscription');
});

