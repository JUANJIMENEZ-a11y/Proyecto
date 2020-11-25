<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesIngresoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ingreso', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cantidad');
            $table->bigInteger('precio');
            $table->bigInteger('id_ingreso');
            $table->bigInteger('id_articulo');
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
        Schema::drop('detalles_ingreso');
    }
}
