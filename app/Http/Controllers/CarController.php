<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index', [
            'cars' => Car::all()
        ]);
    }

    
    public function create()
    {
        return view('cars.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50', 
            'matricula' => 'required|string|size:6|unique:car,matricula', 
            'ano' => 'required|integer|digits:4|min:1900|max:' . date('Y'), 
            'versao' => 'string|max:50',
            'submodelo' => 'string|max:50',
            'portas' => 'required|integer|min:1|max:6',
            'cor' => 'required|string|max:30',
            'traccao' => 'required|in:Integral,Tracção dianteira,Tracção traseira',
            'cilindrada' => 'required|integer',
            'potencia' => 'required|integer', 
            'caixa' => 'required|in:Automática,Manual',  
            'combustivel' => 'required|in:Diesel,Elétrico,Gasolina,GPL,GNC,Híbrido (Diesel),Híbrido (Gasolina),Híbrido Plug-In,Hidrogénio', 
            'segmento' => 'required|in:Cabrio,Carrinha,Citadino,Coupé,Monovolume,Pequeno citadino', 
            'tipoCor' => 'required|in:Mate,Metalizado,Pérola',
            'classeVeiculo' => 'required|in:Classe 1,Classe 2,Classe 3,Classe 4',
        ]);

        Car::create($request->input());
        redirect()->route('index');
    }


    public function details(string $id)
    {
        $car = Car::find($id);

        if ($car === null) {
            abort(404);
        }

        return view('cars.details', compact('car'));
    }
}
