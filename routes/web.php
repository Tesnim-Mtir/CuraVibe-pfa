<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecycleController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CliniqueController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\MedicamentController;
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

Route::get('/historydon', [DonationController::class, 'history1'])->name('don.history');
Route::delete('/historydon/{id}', [DonationController::class, 'destroy2'])->name('don.destroy');
Route::put('/updatehistory/{id}', [DonationController::class, 'update2'])->name('don.update');
Route::get('/', [DonationController::class, 'home']);

Route::get('/don', [DonationController::class, 'index'])->name('don.index');
Route::get('/cabinet', [CliniqueController::class, 'index'])->name('cabinet.index');


Route::get('/don/{id}', [DonationController::class, 'show'])->name('don_details');

Route::get('/add', [DonationController::class, 'create'])->name('donation.create');
Route::post('/add', [DonationController::class, 'store'])->name('donation.store');

Route::get('/adddon', [DonationController::class, 'create2'])->name('donation.create');
Route::post('/adddon', [DonationController::class, 'store2'])->name('donation.store');



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
Route::namespace('Auth\User')->group(function () {
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
});


Route::group(['middleware' => 'admin'], function () {
    // Dashboard route
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    // Profile routes
    Route::get('/admin/profile', [AdminController::class, 'profile']);
    Route::post('/admin/profile/update', [AdminController::class, 'updateProfile']);

    // Medicament routes
    Route::get('/admin/medicament', [MedicamentController::class, 'index']);
    Route::post('/admin/medicament/store', [MedicamentController::class, 'store']);
    Route::get('/admin/medicament/{id}/edit', [MedicamentController::class, 'edit']);
    Route::post('/admin/medicament/update', [MedicamentController::class, 'update']);
    Route::get('/admin/medicament/{id}/delete', [MedicamentController::class, 'destroy']);

    // User admin routes
    Route::get('/admin/users', [UserAdminController::class, 'index']);
    Route::get('/admin/users/{id}/delete', [UserAdminController::class, 'destroy']);
});
Auth::routes();

// Authentication routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


