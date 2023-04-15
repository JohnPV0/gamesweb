<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataformas extends Model
{
    use HasFactory;

    protected $table = 'plataformas';

    protected $fillable = [
        'nombre',
        'status',
    ];
}
