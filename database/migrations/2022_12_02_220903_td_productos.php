<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->text('clave',15);
            $table->text('nombre',100);
            $table->text('cantidad',15);
            $table->float('costo',15);
            $table->text('foto');
            $table->text('activo',15);
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
        //
        Schema::dropIfExists('tb_producto');
    }
}
