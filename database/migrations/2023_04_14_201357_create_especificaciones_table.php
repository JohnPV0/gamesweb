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
        Schema::create('especificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_juego_plataforma')->references('id')->on('juegos_plataformas')->unique();
            $table->string('procesador', 255);
            $table->string('memoria_ram', 255);
            $table->double('disco_duro', 6, 2);
            $table->string('tarjeta_grafica', 255);
            $table->string('sistema_operativo', 255);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especificaciones');
    }
};
