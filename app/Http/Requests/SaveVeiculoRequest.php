<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveVeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50', 
            'matricula' => 'required|string|size:6|unique:veiculo,matricula', 
            'ano' => 'required|integer|digits:4|min:1900|max:' . date('Y'), 
            'versao' => 'string|max:50',
            'submodelo' => 'required|string|max:50',
            'portas' => 'required|integer|min:1|max:6',
            'cor' => 'required|string|max:30',
            'traccao' => 'required|in:Integral,Tracção dianteira,Tracção traseira',
            'cilindrada' => 'required|integer',
            'potencia' => 'required|integer', 
            'caixa' => 'required|in:Automática,Manual',  
            'combustivel' => 'required|in:Diesel,Elétrico,Gasolina,GPL,GNC,Híbrido (Diesel),Híbrido (Gasolina),Híbrido Plug-In,Hidrogénio', 
            'segmento' => 'required|in:Cabrio,Carrinha,Citadino,Coupé,Monovolume,Pequeno citadino', 
            'tipoCor' => 'required|in:Mate,Metalizado,Pérola',
            'classeVeiculo' => 'required|in:Classe 1,Classe 2,Classe 3,Classe 4'
        ];
    }
}