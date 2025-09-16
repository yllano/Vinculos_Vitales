<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('familiar_id');
            $table->unsignedBigInteger('adulto_id');

            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->dateTime('fecha_hora');

            $table->timestamps();

            $table->foreign('familiar_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('adulto_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recordatorios');
    }
};
