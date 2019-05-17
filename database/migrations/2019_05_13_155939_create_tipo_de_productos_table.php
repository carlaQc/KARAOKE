<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDeProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_de_productos', function (Blueprint $table) {
            $table->increments('id_tprod');
            $table->string('marca_tprod',50);
            $table->boolean('prep_tprod');
            $table->string('desc_tprod',150);
            $table->string('estado_tprod',2)->default('a');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * creamos modificaciones
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_de_productos');
    }
}
