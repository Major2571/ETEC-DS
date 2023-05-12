<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\ReclamacoesController;
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
    return view('welcome');
});

// Contato e Sugestoes
Route::get('/contato', [ ContatoController::class, 'index'])->name('contato');
Route::get('/mande-uma-sugestao', [ContatoController::class, 'create'])->name('reclamacoes.create');
Route::post('/mande-uma-sugestao', [ ContatoController::class, 'store'])->name('contato.store');
Route::get('/contato/excluir/{idContato}', [ ContatoController::class, 'destroy'])->name('contato.destroy');

// Laboratorio
Route::get('/laboratorio', [LaboratorioController::class, 'index'])->name('laboratorio');
Route::get('/laboratorio/excluir/{idLab}', [LaboratorioController::class, 'destroy'])->name('laboratorio.destroy');
Route::post('/laboratorio', [LaboratorioController::class, 'store'])->name('laboratorio.store');


// Reclamacoes
Route::get('/reclamacoes', [ReclamacoesController::class, 'index'])->name('reclamacoes');
Route::get('/mande-uma-reclamacoes', [ReclamacoesController::class, 'create'])->name('reclamacoes.create');
Route::post('/mande-uma-reclamacoes', [ReclamacoesController::class, 'store'])->name('reclamacoes.store');
Route::get('/reclamacoes/excluir/{idRec}', [ReclamacoesController::class, 'destroy'])->name('reclamacoes.destroy');


// Quem Somos
Route::get('/quem-somos', [QuemSomosController::class, 'index'])->name('quemSomos');
Route::get('/cad-new-dev', [QuemSomosController::class, 'create'])->name('quemSomosCad');
Route::post('/cad-new-dev', [QuemSomosController::class, 'store'])->name('quemSomosCad');
Route::get('/quem-somos/excluir/{idQuemSomos}', [QuemSomosController::class, 'destroy'])->name('quemSomos.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
