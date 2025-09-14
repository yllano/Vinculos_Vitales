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
        Schema::create('adultos_mayores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // referencia al usuario adulto
            $table->unsignedBigInteger('familiar_id'); // referencia al familiar que lo administra
            $table->date('fecha_nacimiento')->nullable();
            $table->string('condiciones_salud')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('familiar_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adultos_mayores');
    }
};
