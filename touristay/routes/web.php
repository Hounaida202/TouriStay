<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\AnnanceController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\FavorisController;

use App\Models\Annance;

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
    return view('welcome');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/registerForm', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile', [TouristController::class, 'Tprofile'])->name('profile');
Route::get('/detaille/{id}', [AnnanceController::class, 'ShowAnnanceDetaille'])->name('detaille');
Route::patch('/profileUpdate', [TouristController::class, 'updateProfile'])->name('profile.update');
Route::post('/proprietaireForm', [AnnanceController::class, 'addAnnance'])->name('add');
Route::get('/proprietaire', [ProprietaireController::class, 'getMesAnnances'])->name('proprietaire');
Route::delete('/annance/{id}', [AnnanceController::class, 'destroy'])->name('annance.destroy');
Route::get('/touristPage',[TouristController::class,'tourist'])->name('tourist');
Route::match(['get', 'post'], '/tourist', [AnnanceController::class, 'ShowAnnance'])->name('tourist');


// Route::post('/search', [AnnanceController::class, 'search'])->name('search');

Route::get('/editAnnance/{id}', [AnnanceController::class, 'getFormule'])->name('editAnnance');

Route::post('/favoris/{annance_id}', [FavorisController::class, 'store'])->name('favoris.store');
// Route::post('/favoris', [AnnanceController::class, 'ShowAnnancefavoris'])->name('favoris');

Route::get('/favoris', [FavorisController::class, 'mesFavoris'])->name('favoris');
