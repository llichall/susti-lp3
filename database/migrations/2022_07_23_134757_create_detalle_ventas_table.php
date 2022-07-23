<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad");
            $table->float("subtotal");
            $table->unsignedBigInteger("id_venta");
            $table->foreign("id_venta")->references("id")->on("ventas");
            $table->unsignedBigInteger("id_prenda");
            $table->foreign("id_prenda")->references("id")->on("prendas");
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
        Schema::dropIfExists('detalle_ventas');
    }
};
