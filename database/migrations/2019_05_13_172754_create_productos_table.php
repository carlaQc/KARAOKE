<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_prod');
            $table->string('nombre_prod',70);
            $table->integer('cant_prod');
            $table->datetime('fing_prod');
            $table->datetime('fven_prod');
            $table->integer('id_prec')->unsigned();
            $table->integer('id_prov')->unsigned();
            $table->string('estado_prod',2)->default('a');
            $table->timestamps();

            $table->foreign('id_prec')->references('id_prec')->on('precios')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_prov')->references('id_prov')->on('proveedores')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
