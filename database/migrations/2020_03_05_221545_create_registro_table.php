<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistroTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->integer('idfactura')->unsigned();
            $table->integer('idcliente')->unsigned();
            $table->integer('idproducto')->unsigned();
            $table->foreign('idfactura')->references('id')->on('factura');
            $table->foreign('idcliente')->references('id')->on('cliente');
            $table->foreign('idproducto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro');
    }
}
