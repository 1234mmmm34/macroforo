<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->integer('id_categoria')->autoIncrement();
            $table->string('nombre', 200);
            $table->string('slug', 200);
            $table->integer('usuario');
            $table->timestamp('fecha');
            $table->integer('id_catprimaria')->nullable(); // Si es nullable
            $table->primary('id_categoria');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
