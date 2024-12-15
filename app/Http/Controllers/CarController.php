<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\SaveCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index', [
            'cars' => Car::orderBy('created_at')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(SaveCarRequest $request)
    {
        $car = Car::create($request->validated());

        return redirect()->route('details', ['car' => $car->id])
            ->with('status', 'Veículo adicionado com sucesso.');
    }

    public function details(Car $car)
    {
        return view('cars.details', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return redirect()->route('details', ['car' => $car->id])
            ->with('status', 'Veículo atualizado com sucesso.');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('index')
            ->with('status', 'Veículo eliminado com sucesso.');
    }

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