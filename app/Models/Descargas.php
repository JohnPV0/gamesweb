<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descargas extends Model
{
    use HasFactory;

    protected $table = 'descargas';

    protected $fillable = [
        'id_juego',
        'id_usuario',
        'fecha',
        'status'
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
