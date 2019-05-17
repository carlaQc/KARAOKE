<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id_inv');
            $table->string('nombre_inv',50);
            $table->string('accion_inv',2);
            $table->integer('stock_inv');
            $table->integer('ing_inv');
            $table->integer('sal_inv');
            $table->datetime('f_inv');
            $table->string('estado_inv')->default('a');
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
        Schema::dropIfExists('inventarios');
    }
}
