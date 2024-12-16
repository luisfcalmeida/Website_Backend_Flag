<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\SaveCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\Http;

class HistoricoController extends Controller
{
    public function historico($id)
    {
        $car = Car::findOrFail($id);

        $response = Http::get('http://localhost:3000/api/funcionarios');
        $funcionarios = $response->json();

        return view('cars.historico', compact('car', 'funcionarios'));
    }

    public function storeHistorico(Request $request, $id)
    {
        $request->validate([
            'idFuncionario' => 'required|string',
            'dataInicio' => 'required|date',
            'dataFim' => 'required|date|after:dataInicio',
            'kmInicio' => 'required|numeric',
            'kmFim' => 'required|numeric|gte:kmInicio',
            'descricaoRota' => 'required|string',
        ]);

        $car = Car::findOrFail($id);

        Http::post('http://localhost:3000/api/historicos', [
            'matriculaVeiculo' => $car->matricula,
            'idFuncionario' => $request->input('idFuncionario'),
            'dataInicio' => $request->input('dataInicio'),
            'dataFim' => $request->input('dataFim'),
            'kmInicio' => $request->input('kmInicio'),
            'kmFim' => $request->input('kmFim'),
            'descricaoRota' => $request->input('descricaoRota'),
        ]);

        return redirect()->route('historico', ['car' => $car->id])
        ->with('status', 'Histórico adicionado com sucesso.');
    
    }
}