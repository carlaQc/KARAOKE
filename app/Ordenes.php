<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    protected $fillable = [
         'producto', 'precio', 'cantidad','ctotal','estado','id_nuevo',
    ];
    protected $primaryKey = 'id_orden';
}
