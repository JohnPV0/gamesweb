<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos_plataformas extends Model
{
    use HasFactory;

    protected $table = 'juegos_plataformas';

    protected $fillable = [
        'id_juego',
        'id_plataforma',
        'stock',
        'total_descargas',
        'precio_compra',
        'precio_venta',
        'procesador',
        'memoria_ram',
        'disco_duro',
        'tarjeta_grafica',
        'sistema_operativo',
        'status',
    ];

    public function juegos()
    {
        return $this->belongsTo('App\Models\Juegos', 'id_juego', 'id');
    }

    public function plataformas()
    {
        return $this->belongsTo('App\Models\Plataformas', 'id_plataforma', 'id');
    }
}
