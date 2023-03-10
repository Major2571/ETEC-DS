<?php

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
    return view('index');
});

// Route::get('/laboratorio', function () {
//     return view('laboratorio');
// });

// Route::get('/contato', function () {
//     return view('contato');
// });

// Route::get('/quemSomos', function () {
//     return view('quemSomos');
// });

// Route::get('/reclamacoes', function () {
//     return view('reclamacoes');
// });

Route::get('/laboratorio', "LaboratorioController@index");
Route::get('/reclamacoes', "ReclamacoesController@index");
Route::get('/quemSomos', "QuemSomosController@index");
Route::get('/contato', "ContatoController@index");