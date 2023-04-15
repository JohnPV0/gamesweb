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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ruta_foto_perfil', 255);
            $table->string('nombre', 80);
            $table->string('ap_pat', 80);
            $table->string('ap_mat', 80);
            $table->string('email', 80)->unique();
            $table->string('telefono', 20);
            $table->string('direccion', 80);
            $table->foreignId('id_pais')->references('id')->on('paises');
            $table->foreignId('id_entidad')->references('id')->on('entidades');
            $table->foreignId('municipio_id')->constrained();
            $table->foreignId('id_tipo_usu')->references('id')->on('tipos_usuario');
            $table->string('colonia',80);
            $table->integer('cp');
            $table->date('fecha_naci');
            $table->string('username',80)->unique();
            $table->string('password',255);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
