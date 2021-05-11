<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/* rotas gerais*/

Route::get('/', [DashboardController::class,'home']);
Route::any('/login', [DashboardController::class,'login']);
