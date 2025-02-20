<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Definir la tabla si es necesario
    protected $primaryKey = 'id_categoria'; // Establecer 'id_categoria' como la clave primaria
    public $timestamps = true; // Usar timestamps (si la tabla tiene 'created_at' y 'updated_at')

    protected $fillable = [
        'nombre',
        'id_catprimaria'
    ];
}
