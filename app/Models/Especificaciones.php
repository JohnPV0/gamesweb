<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificaciones extends Model
{
    use HasFactory;

    protected $table = 'especificaciones';

    protected $fillable = [
        'id_juego_plataforma',
        'procesador',
        'memoria_ram',
        'disco_duro',
        'tarjeta_grafica',
        'sistema_operativo',
        'status',
    ];

    public function juegos_plataformas()
    {
        return $this->belongsTo('App\Models\Juegos_plataformas', 'id_juego_plataforma', 'id');
    }
}
