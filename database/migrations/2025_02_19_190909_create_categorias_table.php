<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id_categoria');  // Define el id como 'id_categoria'
            $table->string('nombre', 200); // Define el nombre de la categoría
            $table->integer('id_catprimaria')->nullable(); // Definimos 'id_catprimaria' como entero, puede ser nulo
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
