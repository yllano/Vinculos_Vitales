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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adulto_id');
            $table->date('fecha');
            $table->integer('rutinas_programadas')->default(0);
            $table->integer('rutinas_cumplidas')->default(0);
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('adulto_id')->references('id')->on('adultos_mayores')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
