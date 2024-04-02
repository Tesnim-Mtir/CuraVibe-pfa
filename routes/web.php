<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/home', function () {
    return view('DON/home');
    
});


Route::get('/don', function () {
    return view('DON/don');
});

/*Userspace Routes*/

Route::get('/traitment', [UserController::class, 'newtraitment']);
Route::POST('/traitment/add', [UserController::class, 'addnewtraitment']);
Route::get('/history', [UserController::class, 'history']);
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/ongoing', [UserController::class, 'ongoing']);
Route::get('/register', [UserController::class, 'register']);




  