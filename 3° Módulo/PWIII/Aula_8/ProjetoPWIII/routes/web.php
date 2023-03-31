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

// Contato
Route::get('/contato', 'App\Http\Controllers\ContatoController@index');
Route::get('/contato/excluir/{idContato}', 'App\Http\Controllers\ContatoController@destroy');
Route::post('/contato', 'App\Http\Controllers\ContatoController@store');

// Laboratorio
Route::get('/laboratorio', 'App\Http\Controllers\LaboratorioController@index');
Route::get('/laboratorio/excluir/{idLab}', 'App\Http\Controllers\LaboratorioController@destroy');
Route::post('/laboratorio', 'App\Http\Controllers\LaboratorioController@store');

// Reclamacoes
Route::get('/reclamacoes', 'App\Http\Controllers\ReclamacoesController@index');
Route::get('/reclamacoes/excluir/{idRec}', 'App\Http\Controllers\ReclamacoesController@destroy');
Route::post('/reclamacoes', 'App\Http\Controllers\ReclamacoesController@store');


// Quem Somos
Route::get('/quem-somos', 'App\Http\Controllers\QuemSomosController@index');
Route::get('/quem-somos/excluir/{idQuemSomos}', 'App\Http\Controllers\QuemSomosController@destroy');
Route::post('/quem-somos', 'App\Http\Controllers\QuemSomosController@store');
