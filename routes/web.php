<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
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

// Verbo Http.
// get
// put 
// post
// patch
// delete 
// options

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contatos', [ContatoController::class, 'contatos'])->name('site.contatos');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/rota1', function (){
    echo 'vc esta na rota 1';
})->name('site.rota1');

Route::get('/rota2', function (){
    return redirect()->route('site.rota1');
})->name('site.rota2');
// Route::redirect('rota2', 'rota1');

Route::fallback( function(){
    echo 'A pagina que você esta tentando acessar não exite. <a href="'.route('site.index').'">Clique aqui</a> rotornar a Home!';
});