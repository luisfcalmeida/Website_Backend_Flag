<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request; 
use App\Models\Veiculo;
use App\Http\Requests\SaveVeiculoRequest;
use App\Http\Requests\UpdateVeiculoRequest;

class VeiculoController extends Controller
{
    // Função para listar todos os veículos, com paginação de 10 veículos por página
    public function mostrar()
    {
        $veiculos = Veiculo::paginate(10);
        return view('veiculo.mostrar', compact('veiculos'));
    }

    // Função para exibir o formulário de criação de um novo veículo
    public function criar()
    {
        return view('veiculo.criar');
    }

    // Função para exibir os detalhes de um veículo específico
    public function detalhes(Veiculo $veiculo)
    {
        return view('veiculo.detalhes', compact('veiculo'));
    }

    // Função para exibir o formulário de edição de um veículo específico
    public function editar(Veiculo $veiculo)
    {
        return view('veiculo.editar', compact('veiculo'));
    }

    // Função para armazenar um novo veículo (submissão do formulário de criação)
    public function armazenar(SaveVeiculoRequest $request)
    {
        $veiculo = Veiculo::create($request->validated());

        return redirect()->route('veiculo.detalhes', ['veiculo' => $veiculo->id])
            ->with('status', 'Veículo adicionado com sucesso.');
    }

    // Função para atualizar um veículo existente (submissão do formulário de edição)
    public function atualizar(UpdateVeiculoRequest $request, Veiculo $veiculo)
    {
        $veiculo->update($request->validated());

        return redirect()->route('veiculo.detalhes', ['veiculo' => $veiculo->id])
            ->with('status', 'Veículo atualizado com sucesso.');
    }

    // Função para eliminar um veículo
    public function eliminar(Veiculo $veiculo)
    {
        $veiculo->delete();
        
        return redirect()->route('veiculo.mostrar')
            ->with('status', 'Veículo eliminado com sucesso.');
    }
}