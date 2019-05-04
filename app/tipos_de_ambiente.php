<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_de_ambiente extends Model
{
    //

    protected $fillable = ['nombre','capacidad','costo','disponible'];
}
