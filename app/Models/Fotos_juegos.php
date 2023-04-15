<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_juegos extends Model
{
    use HasFactory;


    protected $table = 'fotos_juegos';

    protected $fillable = [
        'id_juego',
        'ruta',
        'status',
    ];

    public function juegos()
    {
        return $this->belongsTo('App\Models\Juegos', 'id_juego', 'id');
    }
}
