<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrada
 *
 * @property $id
 * @property $slug
 * @property $titulo
 * @property $introduccion
 * @property $usuario
 * @property $fecha_actualizacion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrada extends Model
{
    // Si deseas limitar la cantidad de registros por página al mostrar en un paginador
    protected $perPage = 20; // Puedes ajustarlo según tus necesidades

    /**
     * Los atributos que se pueden asignar de manera masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = ['slug','titulo', 'introduccion', 'usuario'];

    // Si no deseas que Laravel maneje automáticamente los campos `created_at` y `updated_at`, puedes desactivar las marcas de tiempo
    public $timestamps = false;

    /**
     * Si la tabla tiene un nombre distinto del nombre plural del modelo, puedes especificarlo aquí
     * Si la tabla sigue el patrón (plural del modelo), no es necesario definirlo.
     */
    // protected $table = 'entradas'; // Descomenta si la tabla no se llama 'entradas' por defecto

    /**
     * Si el campo de la clave primaria no es 'id', puedes especificarlo también.
     */
    // protected $primaryKey = 'id_entrada'; // Descomenta si el campo de clave primaria no es 'id'

    /**
     * Si la clave primaria no es auto incremental, puedes usar esto para desactivar la autoincrementación
     */
    // public $incrementing = false; // Descomenta si la clave primaria no es autoincremental
}
