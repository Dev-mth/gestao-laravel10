<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PrincipalController::class, 'principal']);//->name('gestao.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);//->name('gestao.index');

Route::get('/contato', [ContatoController::class, 'contato']);//->name('gestao.index');
