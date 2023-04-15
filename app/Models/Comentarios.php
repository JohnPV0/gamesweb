<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    protected $fillable = [
        'id_juego',
        'id_usuario',
        'puntuacion',
        'titulo',
        'comentario',
        'status',
    ];

    public function juegos()
    {
        return $this->belongsTo('App\Models\Juegos', 'id_juego', 'id');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\Users', 'id_usuario', 'id');
    }
}
