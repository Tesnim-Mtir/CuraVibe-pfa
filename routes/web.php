<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecycleController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CliniqueController;
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


