<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    /** @use HasFactory<\Database\Factories\MovimientoFactory> */
    use HasFactory;

     protected $table = 'movimientos';
    
    protected $fillable = [
        'producto_id',
        'almacen_id',
        'user_id',
        'tipo_movimiento',
    ];
}
