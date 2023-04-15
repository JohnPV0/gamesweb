<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_pago extends Model
{
    use HasFactory;

    protected $table = 'tipos_pago';

    protected $fillable = [
        'nombre',
        'status',
    ];
}
