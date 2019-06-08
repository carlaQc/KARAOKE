<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposDeAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_de_ambientes', function (Blueprint $table) {
           $table->increments('id');
            $table->string('nombre');
            $table->string('capacidad');
            $table->integer('costo');
            $table->boolean('disponible')->default(1);
            $table->string('estado_amb',2)->default('a');
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
        Schema::dropIfExists('tipos_de_ambientes');
    }
}
