<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $fillable = [
        'nombre_prov', 'nit_prov', 'celular_prov', 'direccion_prov','estado_prov',
    ];
    protected $primaryKey = 'id_prov';
}
