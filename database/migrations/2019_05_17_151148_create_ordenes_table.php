<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id_orden');
            $table->String('producto');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->integer('ctotal');
            $table->String('estado',2)->default('a');
            $table->integer('id_nuevo')->unsigned();
            $table->timestamps();

             $table->foreign('id_nuevo')->references('id_nuevo')->on('nuevos_registros')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
