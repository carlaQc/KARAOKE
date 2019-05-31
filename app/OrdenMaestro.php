<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenMaestro extends Model
{
    //

    protected $fillable = ['id', 'name','nombre_cli','fecha','estado'];

    protected $table = "nuevos_registros";
}
