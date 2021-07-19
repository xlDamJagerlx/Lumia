<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidosdetalle', function (Blueprint $table) {
            $table->increments('ID_DET');
            $table->integer('IDPEDIDO_DET');
            $table->integer('IDPRODUCTOS_DET');
            $table->integer('CANTIDAD_DET');
            $table->float('PRECIO_DET');
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
        Schema::dropIfExists('pedidosdetalle');
    }
}
