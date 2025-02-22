<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla si no es el plural del nombre del modelo
    protected $table = 'repositorio';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'palabras_clave',
        'descripcion',
        'categoria',
        'archivo',
        'fecha_actualizacion'
    ];

    // Definir los campos que se deben ocultar (opcional)
    protected $hidden = [];

    // Definir los tipos de datos para algunos campos (opcional, si se necesita)
    protected $casts = [
        'fecha_actualizacion' => 'datetime',
    ];
}
