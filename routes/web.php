<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', [CarController::class, 'index'])
    ->name('index');

Route::get('/details', [CarController::class, 'details'])
    ->name('details');

Route::get('/create', [CarController::class, 'create'])
    ->name('create');

Route::post('/store', [CarController::class, 'store'])
    ->name('store');

Route::get('/{id}', [CarController::class, 'details'])
    ->name('details')
    ->whereNumber('id');