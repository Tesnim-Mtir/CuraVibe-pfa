<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('DON/home');
    
});


Route::get('/don', function () {
    return view('DON/don');
});

/*Userspace Routes*/

Route::get('/traitment', [UserController::class, 'newtraitment']);

Route::POST('/traitment/add', [UserController::class, 'addnewtraitment']);


Route::get('/traitement/{id}', [UserController::class, 'delete']);

Route::get('/history', [UserController::class, 'history'])->name('history');

Route::get('/allergy', [UserController::class, 'showallergy']);
//Route::get('/allergys', [UserController::class, 'showallergy_user']);
Route::post('/allergy/add', [UserController::class, 'addallergy']);
Route::get('/history/{id}', [UserController::class, 'historydelete']);
Route::get('/profile', [UserController::class, 'profile']);
Route::POST('/profile/update', [UserController::class, 'update']);
//Route::match(['get', 'post'], 'profile/update', [UserController::class, 'update'])->name('profile.update');

Route::get('/ongoing', [UserController::class, 'ongoing'])->name('ongoing');
Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/signout', [UserController::class, 'signout']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/sendsms', [UserController::class, 'sendsms']);
Route::get('/mypharmacie', [UserController::class, 'mypharmacie']);
Route::post('/mypharmacie/add', [UserController::class, 'addtomypharmacie']);
Route::get('/mypharmacie/updatestock/{id}', [UserController::class, 'updatestock']);
Route::get('/mypharmacie/delete/{id}', [UserController::class, 'deletefrommypharmacie']);








  