<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'id_cliente',
        'fecha',
        'subtotal',
        'iva',
        'total',
        'id_tipo_pago',
        'id_usuario',
        'status'
    ];

    public function clientes()
    {
        return $this->belongsTo('App\Models\Users', 'id_cliente', 'id');
    }

    public function tipos_pago()
    {
        return $this->belongsTo('App\Models\Tipos_pago', 'id_tipo_pago', 'id');
    }

    public function usuarios() 
    {
        return $this->belongsTo('App\Models\Users', 'id_usuario', 'id');
    }
}
