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
        Schema::create('football_teams', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEstadio');
            $table->integer('capacidadEstadio');
            $table->string('entrenador');
            $table->string('patrocinador');
            $table->string('equipoRival');
            $table->integer('añoFundacion');
            $table->integer('titulos');
            $table->text('historia');
            $table->date('proximoPartido');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('football_teams');
    }
};
