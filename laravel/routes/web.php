<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;

/* rotas gerais - protegidas pelo middleware*/
Route::middleware([VerificaLogin::class])->group(function () {
    Route::get('/', [DashboardController::class,'home'])->name('home');
    //funcionarios
    Route::any('/usuarios', [UsuariosController::class,'index'])->name('usuarios');
    Route::post('/usuarios/form', [UsuariosController::class,'form'])->name('usuarios-form');
    //produtos
    Route::any('/produtos', [ProdutosController::class,'index'])->name('produtos');
    Route::post('/produtos/form', [ProdutosController::class,'form'])->name('produtos-form');
    Route::get('/produtos/status', [ProdutosController::class,'status'])->name('produtos-status');
    //produtos
    Route::any('/clientes', [ClientesController::class,'index'])->name('clientes');
    Route::post('/clientes/form', [ClientesController::class,'form'])->name('clientes-form');
});
/* rotas desprotegidas de login */
Route::any('/login', [DashboardController::class,'login']);
Route::post('/senha', [DashboardController::class,'senha']);
Route::get('/logout', [DashboardController::class,'logout']);
Route::get('/acesso-negado', [DashboardController::class,'acessoNegado']);
