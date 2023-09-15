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

Route::get('suprimer/{poste}', [UserController::class, 'supprimer']);

Route::get('suprimerat/{Entreprise}', [EntrepriseController::class, 'supprimerentre']);

Route::get('suprimeret/{Etudiant}', [EtudiantController::class, 'supprimeretu']);


// Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


// login
Route::get('login', [UserController::class, 'login']);
Route::post('login', [UserController::class, 'loginstore'])->name('login.store');

Route::post('etudiantStore', [EtudiantController::class, 'etudiantStore'])->name('etudiant.add');
Route::get('etudiant', [EtudiantController::class, 'etudiant'])->name('etudiant.store');

// Route::post('entreprise', [EntrepriseController::class, 'entreprise'])->name('entreprise.store');
// Route::get('entreprise', [EntrepriseController::class, 'entreprise'])->name('entreprise');


//incription
Route::get('inscription', [UserController::class, 'create'])->name('inscription')->middleware('guest');
Route::post('inscription', [UserController::class, 'store'])->name('inscription.store');

//formentreprise
Route::get('formentreprise', [UserController::class, 'prise']);
Route::post('formentreprise', [UserController::class, 'entreprisestore'])->name('inscrientreprise.store');

//poster un emplois
Route::get('poste', [PosteController::class, 'show'])->name('annoncejob');
Route::post('Poste', [PosteController::class, 'postestore'])->name('postestore.store');

//modifier un poste
Route::get('modiposte', [PosteController::class, 'modishow'])->name('modiannoncejob');
Route::post('modiPoste', [PosteController::class, 'modipostestore'])->name('modipostestore.store');



//New Listing
Route::get('create', [EntrepriseController::class, 'create']);
Route::post('create', [EntrepriseController::class, 'store'])->name('create');


//page d'acceuil
Route::get('acceuil', [UserController::class, 'pageacceuil'])->name('welcome');
Route::post('acceuil', [UserController::class, 'acceuilstore'])->name('page');


//Edit Listing
Route::get('poste/{poste}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('poste/{poste}', [ListingController::class, 'update'])->middleware('auth');

//poster un emplois
Route::get('listeannonce', [PosteController::class, 'liste'])->name('annonceliste');
Route::post('listeannonce', [PosteController::class, 'annoncestore'])->name('annoncestore.store');


//Delete Listing
Route::delete('poste/{poste}', [ListingController::class, 'destroy'])->middleware('auth');

// Route::post('/logout', [AuthController::class,'logout'])->name('auth.logout');
// Route::post('supprimer', [!userController::class,'suppri'])->name('usersupprimer');

// Route::controller(GerantController::class)->group(function(){
    // Route::get('/index', 'gerantIndex')->name('gerant.index');
    // Route::get('/index1', 'gerantEdit')->name('gerant.edit');
// })->middleware('auth');
