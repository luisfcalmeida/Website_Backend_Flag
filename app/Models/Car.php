<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';

    protected $fillable = 
        [
            'marca', 
            'modelo',
            'matricula', 
            'ano', 
            'versao', 
            'submodelo', 
            'portas', 
            'cor', 
            'traccao', 
            'cilindrada', 
            'potencia', 
            'caixa', 
            'combustivel', 
            'segmento', 
            'tipoCor', 
            'classeVeiculo'
        ];
}