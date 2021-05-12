<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\VerificaLogin;

/* rotas gerais - protegidas pelo middleware*/
Route::middleware([VerificaLogin::class])->group(function () {
    Route::get('/', [DashboardController::class,'home']);
});
/* rotas desprotegidas de login */
Route::any('/login', [DashboardController::class,'login']);
Route::post('/senha', [DashboardController::class,'senha']);
