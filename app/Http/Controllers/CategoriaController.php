<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Mostrar todas las categorías principales (sin subcategoría)
    public function index()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all(); // O la lógica que necesites para obtener las categorías
        
        // Retornar la vista 'config-perfil' y pasarle las categorías a la vista
        return view('categorias', compact('categorias'));
    }
    
    // Mostrar el formulario para crear una nueva categoría
    public function create()
    {
        return view('categorias.create');
    }

    // Obtener las categorías para el DataTable
    public function getData()
    {
        $categorias = Categoria::select(['id_categoria', 'nombre', 'slug', 'usuario', 'fecha', 'id_catprimaria'])->get();
     //   return view('categorias', compact('categorias'));  // Esto renderiza la vista con los datos
        return view('config-perfil', compact('categorias'));

    }

    // Guardar una nueva categoría
    public function store(Request $request)
    {
        // Validar los datos de la solicitud

        /*
        $request->validate([
            'nombre' => 'required|unique:categorias,nombre',
            'slug' => 'required|unique:categorias,slug',
            'usuario' => 'required|integer',
            'id_catprimaria' => 'nullable|exists:categorias,id_categoria',
        ]);
*/


        $request->validate([
            'nombre' => 'required|unique:categorias,nombre'
        ]);

        // Crear la categoría
        Categoria::create([
            'nombre' => $request->nombre,
            'slug' => $request->nombre,
            'usuario' => 1,
            'id_catprimaria' => 1,
            // 'fecha' => now(), // Asignamos la fecha actual (aunque MySQL maneja esto automáticamente)
        ]);

        // Redirigir después de la creación con mensaje de éxito
    //    return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente');

   // return redirect()->route('config-perfil.categorias')->with('success', 'Categoría creada exitosamente');

   return redirect()->route('config-perfil.categorias')->with('success', 'Categoría creada exitosamente');


    }

    // Mostrar el formulario para editar una categoría
    public function edit($id)
    {
        // Obtener la categoría por su id
        $categoria = Categoria::findOrFail($id);

        // Retornar la vista de edición con la categoría
        return view('categorias.edit', compact('categoria'));
    }

    // Actualizar una categoría
    public function update(Request $request, $id)
    {
        // Validar los datos de la solicitud
        $request->validate([
            'nombre' => 'required|unique:categorias,nombre,' . $id . ',id_categoria',
            'slug' => 'required|unique:categorias,slug,' . $id . ',id_categoria',
            'usuario' => 'required|integer',
            'id_catprimaria' => 'nullable|exists:categorias,id_categoria',
        ]);

        // Obtener la categoría a actualizar
        $categoria = Categoria::findOrFail($id);

        // Actualizar la categoría
        $categoria->update([
            'nombre' => $request->nombre,
            'slug' => $request->slug,
            'usuario' => $request->usuario,
            'id_catprimaria' => $request->id_catprimaria,
            'fecha' => now(), // Esto actualiza el campo de fecha con la fecha actual
        ]);

        // Redirigir después de la actualización con mensaje de éxito
        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente');
    }

    // Eliminar una categoría
    public function destroy($id)
    {
        // Obtener la categoría por su id
        $categoria = Categoria::findOrFail($id);

        // Verificar si la categoría tiene subcategorías (si tiene, no se puede eliminar)
        if ($categoria->subcategorias->isEmpty()) {
            // Eliminar la categoría
            $categoria->delete();

            // Redirigir después de la eliminación con mensaje de éxito
            return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente');
        } else {
            // Si tiene subcategorías, no se puede eliminar
            return redirect()->route('categorias.index')->with('error', 'No se puede eliminar una categoría con subcategorías');
        }
    }
}
