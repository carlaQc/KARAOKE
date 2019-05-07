<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_cli', 'ci_cli', 'paterno_cli', 'materno_cli','celular_cli','genero_cli','estado_cli',
    ];

}
