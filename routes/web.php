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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[ContatoController::class,'contato'])->name('site.contato');
Route::get('/login',[ContatoController::class,'contato'])->name('site.login');

Route::prefix('/app')->group(function(){
Route::get('/clientes',[ContatoController::class,'contato'])->name('app.cliente');
Route::get('/fornecedores',[FornecedorController::class,'index'])->name('app.fornecedores');
Route::get('/produtos',[ContatoController::class,'contato'])->name('app.produtos');
});

//Rota fallback
Route::fallback(function() {
    echo 'A rota acessada Não existe. <a href="'.route('site.index').'">Clique Aqui</a> para ir para página principal';
});


