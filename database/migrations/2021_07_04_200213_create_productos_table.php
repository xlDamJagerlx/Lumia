<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('ID_PR');
            $table->string('CODICE_PR', 30);
            $table->string('NOMBRE_PR', 30);
            $table->string('DESCRIPCION_PR', 60);
            $table->float('PRECIO_PR');
            $table->integer('MARCA');
            $table->integer('STOCK_PR');
            $table->integer('IDCATEGORIA_PR');
            $table->integer('IDSUBCATEGORIA_PR');
            $table->string('FOTO_PR', 200);
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
        Schema::dropIfExists('productos');
    }
}
