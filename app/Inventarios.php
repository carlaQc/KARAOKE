<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarios extends Model
{
    protected $fillable = [
        'nombre_inv', 'accion_inv', 'stock_inv', 'ing_inv','sal_inv','f_inv','estado_inv',
    ];
    protected $primaryKey = 'id_inv';
}
