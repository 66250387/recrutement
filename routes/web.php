<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use App\Models\Entreprise;
use App\Models\poste;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);
Route::get('admin', [adminController::class, 'adminIndex'])->name('admin.index');
Route::get('entreprise', [EntrepriseController::class, 'index'])->name('entreprise.index');
Route::get('role', [RoleController::class, 'index'])->name('role.index');
Route::get('etud', [EtudiantController::class, 'index'])->name('etud.index');


Route::get('gestionentreprise', [EntrepriseController::class, 'entrepriseIndex'])->name('acceuil.index');
Route::get('listeetudiant', [EntrepriseController::class, 'etudiantIndex'])->name('listeetudiant');

    
    
// logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// login
Route::get('login', [UserController::class, 'login']);
Route::post('login', [UserController::class, 'loginstore'])->name('login.store');

Route::post('etudiantStore', [EtudiantController::class, 'etudiantStore'])->name('etudiant.add');
Route::get('etudiant', [EtudiantController::class, 'etudiant'])->name('etudiant.store');

// Route::post('entreprise', [EntrepriseController::class, 'entreprise'])->name('entreprise.store');
// Route::get('entreprise', [EntrepriseController::class, 'entreprise'])->name('entreprise');


//incription
Route::get('inscription', [UserController::class, 'create'])->middleware('guest');
Route::post('inscription', [UserController::class, 'store'])->name('inscription.store');

//formentreprise
Route::get('formentreprise', [UserController::class, 'prise']);
Route::post('formentreprise', [UserController::class, 'entreprisestore'])->name('inscrientreprise.store');

//poster un emplois
Route::get('poste', [PosteController::class, 'show'])->name('annoncejob');
Route::post('Poste', [PosteController::class, 'postestore'])->name('postestore.store');




//New Listing
Route::get('create', [EntrepriseController::class, 'create']);
Route::post('create', [EntrepriseController::class, 'store'])->name('create');


//page d'acceuil
Route::get('acceuil', [UserController::class, 'pageacceuil'])->name('welcome');
Route::post('acceuil', [UserController::class, 'acceuilstore'])->name('page');



// Route::post('/logout', [AuthController::class,'logout'])->name('auth.logout');
// Route::post('connexion', [AuthController::class,'connexion'])->name('connexion');

// Route::controller(GerantController::class)->group(function(){
    // Route::get('/index', 'gerantIndex')->name('gerant.index');
    // Route::get('/index1', 'gerantEdit')->name('gerant.edit');
// })->middleware('auth');
