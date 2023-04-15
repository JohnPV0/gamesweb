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
        Schema::create('juegos_plataformas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_juego')->references('id')->on('juegos');
            $table->foreignId('id_plataforma')->references('id')->on('plataformas');
            $table->integer('stock');
            $table->integer('total_descargas');
            $table->double('precio_compra', 6, 2);
            $table->double('precio_venta', 6, 2);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos_plataformas');
    }
};
