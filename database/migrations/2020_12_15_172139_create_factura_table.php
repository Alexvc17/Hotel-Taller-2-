<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('CodigoF');

            $table->integer('Numero')->unsigned();
            $table->foreign('Numero')->references('Numero')->on('habitacion');

            $table->integer('cliente')->unsigned();
            $table->foreign('cliente')->references('id')->on('cliente');

            $table->integer('formaPago')->unsigned();
            $table->foreign('formaPago')->references('id')->on('formapago');
            
            $table->date('Entrada');
            $table->date('Salida');
            $table->double('Total');
            

            


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
        Schema::dropIfExists('factura');
    }
}
