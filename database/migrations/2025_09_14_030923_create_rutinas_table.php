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
            $table->foreignId('adulto_id')->constrained('adultos')->onDelete('cascade'); // A quién va dirigido
            $table->foreignId('familiar_id')->constrained('users')->onDelete('cascade'); // Quién la creó
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_hora'); // Fecha y hora del recordatorio
            $table->timestamps();
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
