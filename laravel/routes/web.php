<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuariosController;

/* rotas gerais - protegidas pelo middleware*/
Route::middleware([VerificaLogin::class])->group(function () {
    Route::get('/', [DashboardController::class,'home'])->name('home');
    //funcionarios
    Route::any('/usuarios', [UsuariosController::class,'index'])->name('usuarios');
    Route::any('/usuarios/form', [UsuariosController::class,'index'])->name('usuarios-form');
});
/* rotas desprotegidas de login */
Route::any('/login', [DashboardController::class,'login']);
Route::post('/senha', [DashboardController::class,'senha']);
Route::get('/logout', [DashboardController::class,'logout']);
Route::get('/acesso-negado', [DashboardController::class,'acessoNegado']);
