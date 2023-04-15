<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas_detalles extends Model
{
    use HasFactory;

    protected $table = 'ventas_detalles';

    protected $fillable = [
        'id_venta',
        'id_juego',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'status',
    ];

    public function ventas()
    {
        return $this->belongsTo('App\Models\Ventas', 'id_venta', 'id');
    }

    public function juegos()
    {
        return $this->belongsTo('App\Models\Juegos', 'id_juego', 'id');
    }
}
