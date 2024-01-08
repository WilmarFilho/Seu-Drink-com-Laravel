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

/*Route::get('/', function() {
    return view('index');
})->name('site.index');*/

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('site.index');

Route::get('/consulta', [App\Http\Controllers\PrincipalController::class, 'consulta'])->name('site.consulta');

Route::get('/nomeDrink', [App\Http\Controllers\PrincipalController::class, 'nomeDrink'])->name('site.drinknome');

Route::post('/resultadoNomeDrink', [App\Http\Controllers\PrincipalController::class, 'resultadoNomeDrink'])->name('site.resultadoDrinkNome');

Route::post('/fruta', [App\Http\Controllers\PrincipalController::class, 'escolheFruta'])->name('escolheFruta');

Route::post('/bebida', [App\Http\Controllers\PrincipalController::class, 'escolheBebida'])->name('escolheBebida');

Route::post('/resultado', [App\Http\Controllers\PrincipalController::class, 'resultado'])->name('resultado');


Route::get('/ajax/{tipo}/{valor}', [App\Http\Controllers\PrincipalController::class, 'ajax'])->name('ajax');




