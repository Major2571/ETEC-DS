<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/contato', 'App\Http\Controllers\ContatoController@index');
Route::post('/contato', 'App\Http\Controllers\ContatoController@store');

Route::get('/laboratorio', 'App\Http\Controllers\LaboratorioController@index');

Route::get('/reclamacoes', 'App\Http\Controllers\ReclamacoesController@index');

Route::get('/quem-somos', 'App\Http\Controllers\QuemSomosController@index');
