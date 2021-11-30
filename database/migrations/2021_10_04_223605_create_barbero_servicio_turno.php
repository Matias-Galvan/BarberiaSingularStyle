<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarberoServicioTurno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barbero_servicio_turno', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->foreignId("barbero_id")
            // ->nullable()
            // ->constrained("barberos")
            // ->cascadeOnUpdate()
            // ->nullOnDelete();

            // $table->foreignId("servicio_id")
            // ->nullable()
            // ->constrained("servicios")
            // ->cascadeOnUpdate()
            // ->nullOnDelete();

            // $table->foreignId("turno_id")
            // ->nullable()
            // ->constrained("turnos")
            // ->cascadeOnUpdate()
            // ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbero_servicio_turno');
    }
}
