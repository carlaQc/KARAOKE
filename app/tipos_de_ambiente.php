<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_de_ambiente extends Model
{
    //

    protected $fillable = ['id', 'nombre','capacidad','costo','disponible'];

    protected $table = "tipos_de_ambiente";
}
