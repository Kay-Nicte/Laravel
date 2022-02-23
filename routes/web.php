<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('presentacio');
});

// Cridar un  mètode d'un controlador determinat!
Route::get('/prova1', [App\Http\Controllers\ProvaController::class, 'prova1']);

Route::get('/prova2/{numero}', [App\Http\Controllers\ProvaController::class, 'prova2']);

Route::get('/prova3/{numero}', [App\Http\Controllers\ProvaController::class, 'prova3']);

Route::get('/prova4/{numero}', [App\Http\Controllers\ProvaController::class, 'prova4']);

Route::get('/prova5/{numero}', [App\Http\Controllers\ProvaController::class, 'prova5']);


Route::group(['middleware'=>'auth'], function() {

Route::get('planets', [App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index');

Route::get('/planets/delete/{planet}', [App\Http\Controllers\PlanetController::class, 'delete'])->name('planets.delete');

Route::get('/planets/new', [App\Http\Controllers\PlanetController::class, 'show']);

Route::post('/planets/store', [App\Http\Controllers\PlanetController::class, 'store']);

Route::get('/planets/update/{planet}', [App\Http\Controllers\PlanetController::class, 'showUpdate']);

Route::post('/planets/showUpdate/{planet}', [App\Http\Controllers\PlanetController::class, 'update']);

});


Route::get('supers', [App\Http\Controllers\SuperheroController::class, 'index'])->name('supers.index');

Route::get('/supers/delete/{id}', [App\Http\Controllers\SuperheroController::class, 'delete']);

Route::get('/supers/new', [App\Http\Controllers\SuperheroController::class, 'new']);

Route::get('supers/show/{superhero}', [App\Http\Controllers\SuperheroController::class, 'showHero'])->name('supers.show');

Route::post('/supers/store', [App\Http\Controllers\SuperheroController::class, 'store'])->name('supers.store');

Route::get('/supers/update/{superhero}', [App\Http\Controllers\SuperheroController::class, 'showUpdate']);

Route::post('/supers/showUpdate/{superhero}', [App\Http\Controllers\SuperheroController::class, 'update']);

Route::get('superpowers', [App\Http\Controllers\SuperpowerController::class, 'index'])->name('superpowers.index');

Route::get('/superpowers/delete/{id}', [App\Http\Controllers\SuperpowerController::class, 'delete']);

Route::get('/superpowers/new', [App\Http\Controllers\SuperpowerController::class, 'show']);

Route::post('/superpowers/store', [App\Http\Controllers\SuperpowerController::class, 'store']);

Route::get('/superpowers/update/{superpoder}', [App\Http\Controllers\SuperpowerController::class, 'showUpdate']);

Route::post('/superpowers/showUpdate/{superpoder}', [App\Http\Controllers\SuperpowerController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/webSegura', function () {
    return "Estas autentificat!!";
})->middleware('auth');