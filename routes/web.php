<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;

Route::resource('users', UserController::class);

Route::get('/', function() {
    return redirect('/inicio');
});

// Rotas usuários

Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista']);

Route::post('/carrinho', [CarrinhoController::class, 'adicionarCarrinho']);

Route::post('/remover', [CarrinhoController::class, 'removerCarrinho']);

Route::get('/detalhes-produto/{id}', [ProdutoController::class, 'detalhar_produto']);

Route::view('/login', 'user.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/cadastro', [LoginController::class, 'cadastrarUsuario']);

// Rotatas administradores

Route::get('/inicio/admin', [ProdutoController::class, 'index']);

Route::post('/cadastrar-produto/admin', [ProdutoController::class, 'cadastrar_produto']);

Route::get('/detalhes-produto/admin/{id}', [ProdutoController::class, 'ver_produto']);

Route::get('/editar-produto/admin/{id}', [ProdutoController::class, 'editar_produto']);

Route::post('/editar-produto/admin/{id}', [ProdutoController::class, 'editar_produto']);

Route::get('/excluir-produto/admin/{id}', [ProdutoController::class, 'excluir_produto']);
