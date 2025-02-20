<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        $categorias = Categoria::all(); // Obtener todas las categorías
        return view('categorias', compact('categorias'));
    }

    // Mostrar el formulario para crear una nueva categoría
    public function create()
    {
        // Obtener todas las categorías para el campo id_catprimaria (relación padre)
        $categoriasPadres = Categoria::all();
        return view('categorias.create', compact('categoriasPadres'));
    }

    // Guardar una nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'id_catprimaria' => 'nullable|integer|exists:categorias,id_categoria', // Validamos que el id_catprimaria exista si es proporcionado
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría creada exitosamente.');
    }

    // Mostrar un formulario para editar una categoría
    public function edit(Categoria $categoria)
    {
        $categoriasPadres = Categoria::all(); // Obtener todas las categorías para el campo id_catprimaria (relación padre)
        return view('categorias.edit', compact('categoria', 'categoriasPadres'));
    }

    // Actualizar una categoría existente
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'id_catprimaria' => 'nullable|integer|exists:categorias,id_categoria', // Validamos que el id_catprimaria exista si es proporcionado
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría actualizada exitosamente.');
    }

    // Eliminar una categoría
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')
                         ->with('success', 'Categoría eliminada exitosamente.');
    }
}
