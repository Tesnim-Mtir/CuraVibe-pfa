<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

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

Route::get('/', [DonationController::class, 'home']);

Route::get('/don', [DonationController::class, 'index'])->name('don.index');

Route::get('/don/{id}', [DonationController::class, 'show'])->name('don_details');

Route::get('/add', [DonationController::class, 'create'])->name('donation.create');
Route::post('/add', [DonationController::class, 'store'])->name('donation.store');


Route::get('/1', function () {
    return view('home/don/add');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
