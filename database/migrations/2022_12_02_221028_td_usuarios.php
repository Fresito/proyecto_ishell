<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->text('clave',15);
            $table->text('nombre',15);
            $table->text('apellido_p',15);
            $table->text('apellido_m',15);
            $table->date('fecha_nacimiento',15);
            $table->text('genero',15);
            $table->text('foto',15);
            $table->text('email',50);
            $table->text('pass',8);
            $table->text('id_nivel',5);
            $table->boolean('activo',1);
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
        Schema::dropIfExists('tb_usuario');
    }
}
