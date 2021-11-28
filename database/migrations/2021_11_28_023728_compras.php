<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id_compras');
            $table->date('fecha_compra');
            $table->string('monto');
            $table->string('descripcion');
            $table->integer('id_proveedor')->unsigned();
            // $table->foreign('id_proveedor')->references('id')->on('proveedor')->onUpdate('cascade')->onDelete('cascade');
            // $table->integer('id_proveedor')->unsigned();
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
        Schema::dropIfExists('compras');
    }
}
