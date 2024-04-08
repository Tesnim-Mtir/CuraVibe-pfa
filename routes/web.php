<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ChartJSController;




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






Route :: get ( '/Graphique' , [ ChartJSController :: class , 'chartData' ])->name('graphique'); 


Route::get('/Graphique', [ChartJSController::class, 'yourControllerMethod '])->name('graphique');

Route :: get ( '/Graphique' , [ ChartJSController :: class , 'donutChart' ]);
Route::get('/Graphique', [ChartJSController :: class , 'fetchStatistics'])->name('fetch.statistics');


Route::get('/Graphique', function () {
    return view('charts/Graphique');
});
