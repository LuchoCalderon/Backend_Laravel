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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments("id");
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('tipoIdentificacion');
            $table->string('nIdentificacion');
            $table->string('telefono');
            $table->string('email');
            $table->string('profesion');
            $table->string('rol');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
