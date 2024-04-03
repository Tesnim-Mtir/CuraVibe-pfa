<?php

use Illuminate\Support\Facades\Route;

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
    return view('home/don/don');
});
Route::get('/don_details', function () {
    return view('home/don/don_details');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
