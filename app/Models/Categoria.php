<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    
    protected $primaryKey = 'id_categoria';

    public $timestamps = false; // No se manejan los timestamps automáticos de Laravel (creado/actualizado)

    // Definir los campos que pueden ser asignados de forma masiva
    protected $fillable = [
        'nombre',
        'slug',
        'usuario',
       // 'fecha',
        'id_catprimaria',
    ];
}
