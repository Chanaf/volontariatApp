<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\ActiviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();

Route::resource('organisations', 'OrganisationController');

Route::get('/home/valider/{id}', [OrganisationController::class, 'valider'])->name('valider');
Route::get('/home/rejeter/{id}', [OrganisationController::class, 'rejeter'])->name('rejeter');
Route::get('home/inscrit', [OrganisationController::class, 'inscrit'])->name('inscrit');
Route::get('home/organisation', [OrganisationController::class, 'monOrga'])->name('organisation');

Route::get('home/volontaires', [HomeController::class, 'volontaireInscrit'])->name('volontaires');
Route::get('home/volontaire/{id}', [UserController::class, 'show'])->name('detail');
Route::get('participer/{id}', [UserController::class, 'participer'])->name('participer');
Route::get('/', [UserController::class, 'index'])->name('accueil');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/profil', [HomeController::class, 'profil'])->name('profil');
Route::post('/home/profil', [HomeController::class, 'update'])->name('update');

Route::resource('home/activites', 'ActiviteController');

Route::get('/mon-compte', [UserController::class, 'show'])->name('mon-compte');

