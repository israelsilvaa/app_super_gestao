<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ModuloController;
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

// Verbos Http.
// get
// put 
// post
// patch
// delete 
// options

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre_nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre_nos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/curso')->group(function () {
    Route::get('/modulo', [ModuloController::class, 'view'])->name('curso.modulos');
    Route::get('/aula46', [ModuloController::class, 'aula46'])->name('curso.aula46');
    Route::get('/aula47', [ModuloController::class, 'aula47'])->name('curso.aula47');
    Route::get('/aula48', [ModuloController::class, 'aula48'])->name('curso.aula48');
    Route::get('/aula49', [ModuloController::class, 'aula49'])->name('curso.aula49');
    Route::get('/aula51', [ModuloController::class, 'aula51'])->name('curso.aula51');
    Route::get('/aula52', [ModuloController::class, 'aula52'])->name('curso.aula52');
    Route::get('/aula53', [ModuloController::class, 'aula53'])->name('curso.aula53');
    Route::get('/aula54', [ModuloController::class, 'aula54'])->name('curso.aula54');
    Route::get('/aula55', [ModuloController::class, 'aula55'])->name('curso.aula55');
    Route::get('/aula57', [ModuloController::class, 'aula57'])->name('curso.aula57');
    /*
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    Route::get('/aula', [ModuloController::class, 'aula'])->name('curso.aula');
    */
});

Route::prefix('/app')->group(function () {
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{x}/{y}', [TesteController::class, 'teste'])->name('site.teste');

Route::fallback( function(){
    echo 'A pagina que você esta tentando acessar não exite. <a href="'.route('site.index').'">Clique aqui</a> rotornar a Home!';
});