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
        Schema::create('repositorio', function (Blueprint $table) {
            $table->id(); // Creará un campo 'id' de tipo BIGINT y autoincremental
            $table->string('nombre', 255)->default('N');
            $table->string('palabras_clave', 255);
            $table->text('descripcion');
            $table->integer('categoria')->default(1);
            $table->text('archivo')->default('N');
            $table->timestamp('fecha_actualizacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repositorio');
    }
};
