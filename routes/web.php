<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ContactController;




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
Route::get('/contact', function () {
    return view('/contact');
});



Route::get('/Graphique', [ChartJSController::class, 'yourControllerMethod '])->name('graphique');

Route :: get ( '/Graphique' , [ ChartJSController :: class , 'donutChart' ]);
Route::get('/Graphique', [ChartJSController :: class , 'fetchStatistics'])->name('graphique');
Route::get('/Graphique', [ChartJSController::class, 'showGraphiquePage'])->name('graphique');

Route::get('/graphique', function () {
    return view('charts/Graphique');
});
Route::get('/statistique', function () {
    return view('/statistique');
});
use App\Http\Controllers\RecycleController;

Route::get('/Graphique', [RecycleController::class, 'index'])->name('graphique');






Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


