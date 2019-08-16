<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('libros_id')->unsigned();
            $table->bigInteger('no_orden')->unsigned();
            $table->foreign('libros_id')->references('id')->on('libros');
            $table->foreign('no_orden')->references('id')->on('orden');
            $table->string('cantidad', 30);
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
        Schema::dropIfExists('detalle_orden');
    }
}
