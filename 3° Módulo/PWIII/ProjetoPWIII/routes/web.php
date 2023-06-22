<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\ReclamacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cep', function () {
    return view('apiCEP');
})->name('cep');

// Contato e Sugestoes
Route::get('/mande-uma-sugestao', [ContatoController::class, 'create'])->name('contato.create');
Route::post('/mande-uma-sugestao', [ContatoController::class, 'store'])->name('contato.store');

// Reclamacoes
Route::get('/mande-uma-reclamacao', [ReclamacoesController::class, 'create'])->name('reclamacoes.create');
Route::post('/mande-uma-reclamacao', [ReclamacoesController::class, 'store'])->name('reclamacoes.store');

// Quem Somos
Route::get('/quem-somos', [QuemSomosController::class, 'index'])->name('quemSomos');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');

    Route::get('/reclamacoes', [ReclamacoesController::class, 'index'])->name('reclamacoes');
    Route::get('/reclamacoes/excluir/{idRec}', [ReclamacoesController::class, 'destroy'])->name('deleteRec');
    Route::get('/reclamacoes/edit/{idRec}', [ReclamacoesController::class, 'edit'])->name('editRec');
    Route::put('/reclamacoes/update/{idRec}', [ReclamacoesController::class, 'update'])->name('updateRec');

    Route::get('/laboratorio', [LaboratorioController::class, 'index'])->name('laboratorio');
    Route::get('/laboratorio/excluir/{idLab}', [LaboratorioController::class, 'destroy'])->name('laboratorio.destroy');
    Route::post('/laboratorio', [LaboratorioController::class, 'store'])->name('laboratorio.store');
    Route::get('/laboratorio/edit/{idLab}', [LaboratorioController::class, 'edit'])->name('editLab');
    Route::put('/laboratorio/update/{idLab}', [LaboratorioController::class, 'update'])->name('updateLab');

    Route::get('/cad-new-dev', [QuemSomosController::class, 'create'])->name('quemSomosCad');
    Route::post('/cad-new-dev', [QuemSomosController::class, 'store'])->name('quemSomosCad.store');
    Route::get('/quem-somos/excluir/{idQuemSomos}', [QuemSomosController::class, 'destroy'])->name('quemSomos.destroy');
    Route::get('/quem-somos/edit/{idQuemSomos}', [QuemSomosController::class, 'edit'])->name('editQuemSomos');
    Route::put('/quem-somos/update/{idQuemSomos}', [QuemSomosController::class, 'update'])->name('updateQuemSomos');

    Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
    Route::get('/contato/excluir/{idContato}', [ContatoController::class, 'destroy'])->name('contato.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
