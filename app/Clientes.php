<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre_cli', 'ci_cli', 'paterno_cli', 'materno_cli','celular_cli','genero_cli','estado_cli',
    ];
    protected $primaryKey = 'id_cli';
}
