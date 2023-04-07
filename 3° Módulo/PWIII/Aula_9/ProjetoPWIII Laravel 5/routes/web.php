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
Route::get('/contato', 'ContatoController@index');
Route::get('/contato/excluir/{idContato}', 'ContatoController@destroy');
Route::post('/contato', 'ContatoController@store');

// Laboratorio
Route::get('/laboratorio', 'LaboratorioController@index');
Route::get('/laboratorio/excluir/{idLab}', 'LaboratorioController@destroy');
Route::post('/laboratorio', 'LaboratorioController@store');

// Reclamacoes
Route::get('/reclamacoes', 'ReclamacoesController@index');
Route::get('/reclamacoes/excluir/{idRec}', 'ReclamacoesController@destroy');
Route::post('/reclamacoes', 'ReclamacoesController@store');


// Quem Somos
Route::get('/quem-somos', 'QuemSomosController@index');
Route::get('/quem-somos/excluir/{idQuemSomos}', 'QuemSomosController@destroy');
Route::post('/quem-somos', 'QuemSomosController@store');
