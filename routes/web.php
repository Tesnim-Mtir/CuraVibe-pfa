<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use app\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/login', function () {
    return view('resources/views/auth/login');
});
Route::get('/recycle', function () {
    return view('resources/views/recycle');
});
Route::get('/statistique', function () {
    return view('resources/views/statistique');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/admin/medicament', [App\Http\Controllers\MedicamentController::class, 'index']);
Route::post('/admin/medicament/store', [App\Http\Controllers\MedicamentController::class, 'store']);

Route::post('/admin/medicament/update', [App\Http\Controllers\MedicamentController::class, 'update']);
Route::get('/admin/medicament/{id}/update', [App\Http\Controllers\MedicamentController::class, 'edit']);
Route::get('/admin/medicament/{id}/delete', [App\Http\Controllers\MedicamentController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/admin/users/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
