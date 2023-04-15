<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    use HasFactory;

    protected $table = 'juegos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'puntuacion',
        'fecha_lanzamiento',
        'id_categoria',
        'status'
    ];

    public function categorias()
    {
        return $this->belongsTo('App\Models\Categorias', 'id_categoria', 'id');
    }
}
