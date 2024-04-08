<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ChartController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route :: get ( '/Graphique' , [ ChartJSController:: class , 'chartData' ])->name('graphique');
Route::get('/Graphique', [ChartJSController::class, 'yourControllerMethod '])->name('graphique');
Route :: get ( 'Graphique' , [ ChartJSController :: class , 'donutChart' ]); 

Route::get('/Graphique', [ChartJSController :: class , 'fetchStatistics'])->name('graphique');