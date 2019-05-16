<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = [
        'nombre_prod', 'cant_prod', 'fing_prod', 'fven_prod',
    ];
    protected $primaryKey = 'id_prod';
}
