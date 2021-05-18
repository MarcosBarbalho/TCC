<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/* rotas gerais - protegidas pelo middleware*/
Route::middleware([VerificaLogin::class])->group(function () {
    Route::get('/', [Controllers\DashboardController::class,'home'])->name('home');
    //funcionarios
    Route::any('/usuarios', [Controllers\UsuariosController::class,'index'])->name('usuarios');
    Route::post('/usuarios/form', [Controllers\UsuariosController::class,'form'])->name('usuarios-form');
    //produtos
    Route::any('/produtos', [Controllers\ProdutosController::class,'index'])->name('produtos');
    Route::post('/produtos/form', [Controllers\ProdutosController::class,'form'])->name('produtos-form');
    Route::get('/produtos/status', [Controllers\ProdutosController::class,'status'])->name('produtos-status');
    //clientes
    Route::any('/clientes', [Controllers\ClientesController::class,'index'])->name('clientes');
    Route::post('/clientes/form', [Controllers\ClientesController::class,'form'])->name('clientes-form');
    Route::any('/clientes/atendimento', [Controllers\ClientesController::class,'atendimento'])->name('clientes-atendimento');
    //tipos de produtos
    Route::any('/prod-tipos', [Controllers\ProdutoTiposController::class,'index'])->name('prod-tipos');
    Route::post('/prod-tipos/form', [Controllers\ProdutoTiposController::class,'form'])->name('prod-tipos-form');
    //atendimento e pedidos
    Route::any('/atendimento', [Controllers\PedidosController::class,'atendimento'])->name('atendimento');
    Route::get('/confirmado', [Controllers\PedidosController::class,'confirmado'])->name('confirmado');
    Route::any('/cozinha', [Controllers\PedidosController::class,'cozinha'])->name('cozinha');
    Route::get('/mesa-entregue', [Controllers\PedidosController::class,'mesaEntregue'])->name('mesa-entregue');
    //gerenciar
    Route::any('/configs', [Controllers\DashboardController::class,'configs'])->name('configs');
});
/* rotas desprotegidas de login */
Route::any('/login', [Controllers\DashboardController::class,'login']);
Route::post('/senha', [Controllers\DashboardController::class,'senha']);
Route::get('/logout', [Controllers\DashboardController::class,'logout']);
Route::get('/acesso-negado', [Controllers\DashboardController::class,'acessoNegado']);
