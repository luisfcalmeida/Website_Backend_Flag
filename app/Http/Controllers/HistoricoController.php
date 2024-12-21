<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request; 
use App\Models\Veiculo; 
use App\Http\Requests\SaveVeiculoRequest; 
use App\Http\Requests\UpdateVeiculoRequest;

class HistoricoController extends Controller
{
    // Função para mostrar o histórico de um veículo específico
    public function mostrar($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $response = Http::get('http://localhost:3000/api/funcionarios');
        $funcionarios = $response->json();

        return view('historico.mostrar', compact('veiculo', 'funcionarios'));
    }

    // Função para armazenar um novo histórico num veículo
    public function armazenar(Request $request, $id)
    {
        $request->validate([
            'idFuncionario' => 'required|string', 
            'dataInicio' => 'required|date', 
            'dataFim' => 'required|date|after:dataInicio',
            'kmInicio' => 'required|numeric', 
            'kmFim' => 'required|numeric|gte:kmInicio',
            'descricaoRota' => 'required|string',
        ]);

        $veiculo = Veiculo::findOrFail($id);

        $data = [
            'matriculaVeiculo' => $veiculo->matricula,
            'idFuncionario' => $request->input('idFuncionario'),
            'dataInicio' => $request->input('dataInicio'),
            'dataFim' => $request->input('dataFim'),
            'kmInicio' => $request->input('kmInicio'),
            'kmFim' => $request->input('kmFim'),
            'descricaoRota' => $request->input('descricaoRota'),
        ];
    
        $response = Http::post("http://localhost:3000/api/historicos", $data);
        
        return redirect()->route('historico.mostrar', ['id' => $veiculo->id])
            ->with('status', 'Histórico adicionado com sucesso.');
    }

    // Função para editar um histórico existente
    public function editar($veiculoId, $historicoId)
    {
        $veiculo = Veiculo::findOrFail($veiculoId);
        $response = Http::get("http://localhost:3000/api/historicos/{$historicoId}");
        $historico = $response->json();

        $responseFunc = Http::get('http://localhost:3000/api/funcionarios');
        $funcionarios = $responseFunc->json();
    
        return view('historico.editar', compact('veiculo', 'historico', 'funcionarios'));
    }
    
    // Função para atualizar um histórico existente
    public function atualizar(Request $request, $veiculoId, $historicoId)
    {
        $request->validate([
            'idFuncionario' => 'required|string',
            'dataInicio' => 'required|date',
            'dataFim' => 'required|date|after:dataInicio',
            'kmInicio' => 'required|numeric',
            'kmFim' => 'required|numeric|gte:kmInicio',
            'descricaoRota' => 'required|string',
        ]);

        $veiculo = Veiculo::findOrFail($veiculoId);
    
        $data = [
            'matriculaVeiculo' => $veiculo->matricula,
            'idFuncionario' => $request->input('idFuncionario'),
            'dataInicio' => $request->input('dataInicio'),
            'dataFim' => $request->input('dataFim'),
            'kmInicio' => $request->input('kmInicio'),
            'kmFim' => $request->input('kmFim'),
            'descricaoRota' => $request->input('descricaoRota'),
        ];
    
        $response = Http::put("http://localhost:3000/api/historicos/{$historicoId}", $data);

        return redirect()->route('historico.mostrar', ['id' => $veiculo->id])
            ->with('status', 'Histórico atualizado com sucesso.');
    }
    
    // Função para eliminar um histórico
    public function eliminar($veiculoId, $historicoId)
    {
        $veiculo = Veiculo::findOrFail($veiculoId);
        $response = Http::delete("http://localhost:3000/api/historicos/{$historicoId}");

        return redirect()->route('historico.mostrar', ['id' => $veiculo->id])
        ->with('status', 'Histórico eliminado com sucesso.');
    }
}
