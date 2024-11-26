<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();

            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('matricula', 6)->unique();
            
            $table->year('ano');
            $table->string('versao', 50);
            $table->string('submodelo', 50);
            $table->tinyInteger('portas');
            $table->string('cor', 30);
            
            $table->enum('traccao', ['Integral', 'Tracção dianteira', 'Tracção traseira']);
            $table->smallInteger('cilindrada');
            $table->smallInteger('potencia');
            $table->enum('caixa', ['Automática', 'Manual']);
            $table->enum('combustivel', ['Diesel', 'Elétrico', 'Gasolina', 'GPL', 'GNC', 'Híbrido (Diesel)', 'Híbrido (Gasolina)', 'Híbrido Plug-In', 'Hidrogénio']);
            $table->enum('segmento', ['Cabrio', 'Carrinha', 'Citadino', 'Coupé', 'Monovolume', 'Pequeno citadino']);
            $table->enum('tipoCor', ['Mate', 'Metalizado', 'Pérola']);
            $table->enum('classeVeiculo', ['Classe 1', 'Classe 2', 'Classe 3', 'Classe 4']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car');
    }
};
