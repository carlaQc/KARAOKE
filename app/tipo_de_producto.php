<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_de_producto extends Model
{
     protected $fillable = [
        'marca_tprod', 'prep_tprod', 'desc_tprod', 'estado_tprod',
    ];
    protected $primaryKey = 'id_tprod';
}
