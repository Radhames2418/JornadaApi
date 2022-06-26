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
        Schema::create('residentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->bigInteger('telefono')->nullable(true);
            $table->string('correo');
            $table->integer('edad');
            $table->string('direccion')->nullable(true);
            $table->tinyInteger('comida_entregable')->nullable(true)->default('0');
            $table->text('observacion')->nullable(true);
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
        Schema::dropIfExists('residentes');
    }
};
