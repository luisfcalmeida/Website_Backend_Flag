<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Veiculo;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Veiculo::create([
            'marca' => 'Audi',
            'modelo' => 'A3',
            'matricula' => '85SV18',
            'ano' => 2020,
            'versao' => 'Sportback',
            'submodelo' => 'Quattro',
            'portas' => 5,
            'cor' => 'Preto',
            'traccao' => 'Integral',
            'cilindrada' => 2000,
            'potencia' => 140,
            'caixa' => 'Automática',
            'combustivel' => 'Gasolina',
            'segmento' => 'Citadino',
            'tipoCor' => 'Metalizado',
            'classeVeiculo' => 'Classe 1',
        ]);
    }
}
