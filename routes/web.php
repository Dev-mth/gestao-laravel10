<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', [ContatoController::class, 'login'])->name('site.login');

// Rotas agrupadas
    Route::prefix('/app')->group(function() {
        
    Route::get('/clientes', [ContatoController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [ContatoController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos', [ContatoController::class, 'produtos'])->name('app.produtos');
});