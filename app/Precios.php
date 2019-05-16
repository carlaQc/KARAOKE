<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precios extends Model
{
     protected $fillable = [
        'nombre_prov', 'cpaquete_prec', 'cunitario_prec','estado_prec',
    ];
    protected $primaryKey = 'id_prec';
}
