<?php

namespace App\Http\Controllers;

use App\Models\Repositorio;
use Illuminate\Http\Request;

class RepositorioController extends Controller
{
    // Mostrar el formulario para crear un nuevo repositorio
    public function create()
    {
        return view('repositorios.create');
    }

    // Almacenar un nuevo repositorio
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'palabras_clave' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|integer',
            'archivo' => 'required|string',
        ]);

        // Crear un nuevo repositorio
        Repositorio::create($request->all());

        // Redirigir a la lista de repositorios
        return redirect()->route('repositorios.index')->with('success', 'Repositorio creado correctamente.');
    }

    // Mostrar la lista de repositorios
    public function index()
    {
        $repositorios = Repositorio::all();
        return view('repositorios.index', compact('repositorios'));
    }

    // Mostrar el formulario para editar un repositorio
    public function edit($id)
    {
        $repositorio = Repositorio::findOrFail($id);
        return view('repositorios.edit', compact('repositorio'));
    }

    // Actualizar un repositorio
    public function update(Request $request, $id)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'palabras_clave' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'categoria' => 'required|integer',
            'archivo' => 'required|string',
        ]);

        // Buscar el repositorio y actualizarlo
        $repositorio = Repositorio::findOrFail($id);
        $repositorio->update($request->all());

        // Redirigir a la lista de repositorios
        return redirect()->route('repositorios.index')->with('success', 'Repositorio actualizado correctamente.');
    }

    // Eliminar un repositorio
    public function destroy($id)
    {
        $repositorio = Repositorio::findOrFail($id);
        $repositorio->delete();

        return redirect()->route('repositorios.index')->with('success', 'Repositorio eliminado correctamente.');
    }
}
