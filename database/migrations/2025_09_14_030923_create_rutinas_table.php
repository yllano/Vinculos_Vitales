<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rutinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adulto_id');
            $table->string('tipo'); // medicamento, cita, actividad
            $table->string('descripcion');
            $table->time('hora');
            $table->date('fecha')->nullable(); // opcional si es para un día específico
            $table->boolean('completado')->default(false);
            $table->timestamps();

            $table->foreign('adulto_id')->references('id')->on('adultos_mayores')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinas');
    }
};
