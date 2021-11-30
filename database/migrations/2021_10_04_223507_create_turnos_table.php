<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("fecha");
            $table->integer('cliente_id');
            $table->integer('servicio_id');
            $table->integer('barbero_id');
            $table->integer('turnero_id')->nullable();
            $table->string('hora');
            $table->boolean('estado_pago');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
