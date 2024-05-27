<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home/welcome');
});
Route::get('/inscription', function () {
    return view('home/inscription');
});

Route::get('/edit', [DonationController::class, 'history'])->name('don.history');
Route::delete('/edit/{id}', [DonationController::class, 'destroy'])->name('don.destroy');
Route::put('/update/{id}', [DonationController::class, 'update'])->name('don.update');


Route::get('/', [DonationController::class, 'home']);

Route::get('/don', [DonationController::class, 'index'])->name('don.index');
Route::get('/cabinet', [CliniqueController::class, 'index'])->name('cabinet.index');


Route::get('/don/{id}', [DonationController::class, 'show'])->name('don_details');

Route::get('/add', [DonationController::class, 'create'])->name('donation.create');
Route::post('/add', [DonationController::class, 'store'])->name('donation.store');



Route::get('/1', function () {
    return view('home/don/add');
});



Route::get('/Graphique', [ChartJSController::class, 'yourControllerMethod '])->name('graphique');

Route :: get ( '/Graphique' , [ ChartJSController :: class , 'donutChart' ]);
Route::get('/Graphique', [ChartJSController :: class , 'fetchStatistics'])->name('fetch.statistics');


Route::get('/Graphique', [ChartJSController::class, 'showGraphiquePage'])->name('graphique');

Route::get('/graphique', function () {
    return view('charts/Graphique');
});
Route::get('/statistique', function () {
    return view('/statistique');
});

Route::get('/Graphique', [RecycleController::class, 'index'])->name('graphique');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');





