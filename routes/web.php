<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;

// Rota para a página inicial (index)
Route::get('/', [HomeController::class, 'index'])->name('index'); // Página principal do website

// Rotas para a gestão dos veículos
Route::prefix('veiculo')->name('veiculo.')->group(function () {
    Route::get('/mostrar', [VeiculoController::class, 'mostrar'])->name('mostrar'); // Mostra todos os veículos
    Route::get('/criar', [VeiculoController::class, 'criar'])->name('criar'); // Formulário para criar um novo veículo
    Route::post('/', [VeiculoController::class, 'armazenar'])->name('armazenar'); // Armazena os dados de um novo veículo (submissão do formulário)
    Route::get('/{veiculo}/detalhes', [VeiculoController::class, 'detalhes'])->name('detalhes')->whereNumber('veiculo'); // Mostra os dados de um veículo específico
    Route::get('/{veiculo}/editar', [VeiculoController::class, 'editar'])->name('editar'); // Formulário para editar um veículo existente
    Route::patch('/{veiculo}', [VeiculoController::class, 'atualizar'])->name('atualizar'); // Atualiza os dados de um veículo existente (submissão do formulário)
    Route::delete('/{veiculo}', [VeiculoController::class, 'eliminar'])->name('eliminar'); // Elimina um veículo
});

// Rotas para a gestão dos históricos
Route::prefix('historico')->name('historico.')->group(function () {
    Route::get('/mostrar/{id}', [HistoricoController::class, 'mostrar'])->name('mostrar'); // Mostra todos os históricos
    Route::post('/veiculo/{veiculo}', [HistoricoController::class, 'armazenar'])->name('armazenar'); // Armazena um novo histórico para um veículo (submissão do formulário)
    Route::get('/{veiculoId}/{historicoId}/editar', [HistoricoController::class, 'editar'])->name('editar'); // Formulário para editar um histórico existente
    Route::patch('/{veiculoId}/{historicoId}', [HistoricoController::class, 'atualizar'])->name('atualizar'); // Atualiza os dados de um histórico existente (submissão do formulário)
    Route::delete('/{veiculoId}/{historicoId}', [HistoricoController::class, 'eliminar'])->name('eliminar'); // Elimina um histórico
});

