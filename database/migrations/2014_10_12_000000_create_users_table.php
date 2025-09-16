<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Relación con el familiar (solo aplica si es adulto)
            $table->unsignedBigInteger('familiar_id')->nullable();
            $table->foreign('familiar_id')->references('id')->on('users')->onDelete('cascade');


            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // Rol: familiar o adulto
            $table->enum('role', ['familiar', 'adulto'])->default('familiar');

            // Campos específicos del adulto
            $table->date('fecha_nacimiento')->nullable();
            $table->string('condiciones_salud')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
