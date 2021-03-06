<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
        $table->increments('id_cli');
        $table->string('nombre_cli',50);
        $table->integer('ci_cli');
        $table->string('paterno_cli',20);
        $table->string('materno_cli',20);
        $table->integer('celular_cli');
        $table->string('genero_cli',2);
        $table->string('estado_cli',2)->default('a');
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
        Schema::dropIfExists('clientes');
    }
}
