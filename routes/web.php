<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecycleController;

use App\Http\Controllers\DonationController;
use App\Http\Controllers\CliniqueController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecycleController;


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
Route::post('/cabinet', [CliniqueController::class, 'search'])->name('search.cliniques');

Route::get('/home', function () {
    return view('DON/home');
    
});
Route::get('/inscription', function () {
    return view('home/inscription');
});
Route::get('/don', function () {
    return view('home/don');
});
