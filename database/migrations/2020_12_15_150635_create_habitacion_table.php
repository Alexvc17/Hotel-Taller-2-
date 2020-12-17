<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->increments('Numero');
            $table->string('descripcion',255);
            $table->integer('numCamas');
            $table->string('foto',45);
            $table->integer('precio_id')->unsigned();
            //precio_id es el nombre que le quiero colocar a mi llave foranea que hace
            //referencia al id de la tabla precio
            $table->foreign('precio_id')->references('id')->on('precio');
            //
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
        Schema::dropIfExists('habitacion');
    }
}
