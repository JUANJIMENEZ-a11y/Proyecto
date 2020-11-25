<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->bigInteger('total');
            $table->bigInteger('id_user');
            $table->bigInteger('id_proveedor');
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
        Schema::drop('ingresos');
    }
}
