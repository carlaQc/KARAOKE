<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNuevosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevos_registros', function (Blueprint $table) {
            $table->increments('id_nuevo');
            $table->String('name',50);
            $table->String('nombre_cli');
            $table->datetime('fecha');
            $table->String('estado',2)->default('a');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nuevos_registros');
    }
}
