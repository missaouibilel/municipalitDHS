<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\PermisController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ReunionController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', [SliderController::class,'index']);
//Route::get('/', 'SliderController@index');
Route::get('/', [SliderController::class,'index'])->name('accueil');
//Route::get('dashboard', [SliderController::class,'indexDashboard']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('welcome');
    return redirect('/');
})->name('dashboard');
Route::get('suivie-reclamation',[ReclamationController::class,'index'])->name('suivieReclamation');
Route::get('ajouter-reclamation',[ReclamationController::class,'create'])->name('ajoutReclamation');
Route::post('ajouter-reclamation',[ReclamationController::class,'store']);

Route::get('suivie-demande-information',[infoController::class,'index'])->name('suivieDemande');
Route::get('ajouter-demande-information',[infoController::class,'create'])->name('ajoutDemande');
Route::post('ajouter-demande-information',[infoController::class,'store']);


Route::get('suivie-Permis',[PermisController::class,'index'])->name('suiviePermis');
Route::get('ajouter-demande-permis',[PermisController::class,'create'])->name('ajoutPermis');
Route::post('ajouter-demande-permis',[PermisController::class,'store']);
//Route::get('download-pdf',[PermisController::class,'download'])->name('pdf');

Route::get('suivie-activite-sportive',[ActiviteController::class ,'index'])->name('suivi-Activit-sportive');
Route::get('suivie-activite-culturel',[ActiviteController::class ,'indexCulturel'])->name('suivi-Activit-culturel');

Route::get('suivie-Projets',[ProjetController::class,'index'])->name('suivie-projets');

Route::get('suivie-réunion',[ReunionController::class,'index'])->name('suivieReunion');




Route::get('/admin',function(){
    return view('layouts.admin');
});


Route::get('/test',function(){
    return view('test');
});


//Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
