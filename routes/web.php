<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComunicadosController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\AdeudoController;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('comunicados', [ComunicadosController::class, 'index'])->name('comunicados');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/informes', [InformeController::class, 'index'])->name('informes');

Route::get('/pagos', [PagoController::class, 'index'])->name('pagos');

Route::get('/adeudos', [AdeudoController::class, 'index'])->name('adeudos');

