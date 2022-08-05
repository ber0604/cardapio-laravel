<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\RefeicaoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CadastroController;


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
    return view('welcome');
});

Route::get('/cardapio', [CardapioController::class, 'index'])->name('cardapio');
Route::get('/cardapio/create', [CardapioController::class, 'create'])->name('cardapio');
Route::post('/cardapio/store', [CardapioController::class, 'store'])->name('cardapio');
Route::get('/cardapio/{id}/edit', [CardapioController::class, 'edit'])->name('cardapio');
Route::post('/cardapio/update', [CardapioController::class, 'update'])->name('cardapio');
Route::get('/cardapio/{id}/destroy', [CardapioController::class, 'destroy'])->name('cardapio');

Route::get('/refeicao', [RefeicaoController::class, 'index']);
Route::get('/refeicao/create', [RefeicaoController::class, 'create']);
Route::post('/refeicao/store', [RefeicaoController::class, 'store']);
Route::get('/refeicao/{id}/edit', [RefeicaoController::class, 'edit']);
Route::post('/refeicao/update', [RefeicaoController::class, 'update']);
Route::get('/refeicao/{id}/destroy', [RefeicaoController::class, 'destroy']);

Route::get('/ingrediente', [IngredienteController::class, 'index']);
Route::get('/ingrediente/create', [IngredienteController::class, 'create']);
Route::post('/ingrediente/store', [IngredienteController::class, 'store']);
Route::get('/ingrediente/{id}/edit', [IngredienteController::class, 'edit']);
Route::post('/ingrediente/update', [IngredienteController::class, 'update']);
Route::get('/ingrediente/{id}/destroy', [IngredienteController::class, 'destroy']);

route::get('/login', [UsuarioController::class, 'login'])->name('login');
route::POST('/login', [UsuarioController::class, 'login'])->name('login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');

route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro');
route::POST('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
