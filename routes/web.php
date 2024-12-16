<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HistoricoController;

Route::get('/', [CarController::class, 'index'])
    ->name('index');

Route::get('/create', [CarController::class, 'create'])
    ->name('create');

Route::post('/store', [CarController::class, 'store'])
    ->name('store');

Route::get('/{car}', [CarController::class, 'details'])
    ->name('details')
    ->whereNumber('car');

Route::get('/{car}/edit', [CarController::class, 'edit'])
    ->name('edit');

Route::patch('/{car}', [CarController::class, 'update'])
    ->name('update');

Route::delete('/{car}', [CarController::class, 'destroy'])
    ->name('destroy');

Route::get('/{car}/historico', [HistoricoController::class, 'historico'])
    ->name('historico');

Route::post('/{car}/historico', [HistoricoController::class, 'storeHistorico'])
    ->name('storeHistorico');