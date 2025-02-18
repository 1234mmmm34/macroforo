<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradasController extends Controller 
{
    // Muestra todas las entradas
    public function index()
    {
        $entradas = Entrada::all();
        return view('auth.entradas', compact('entradas'));
    }

    // Muestra el formulario para crear una nueva entrada
    public function create()
    {
        return view('auth.entradas');
    }

    // Guarda una nueva entrada en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|max:255',
            'titulo' => 'required|max:255',
            'introduccion' => 'required',
        ]);

        Entrada::create([
            'slug' => $request->slug,
            'titulo' => $request->titulo,
            'introduccion' => $request->introduccion,
        ]);

        return redirect()->route('entradas.index')->with('success', 'Entrada creada exitosamente.');
    }

    // Muestra una entrada específica
    public function show($id)
    {
        $entrada = Entrada::findOrFail($id);
        return view('documents.show', compact('entrada'));
    }

    // Muestra el formulario para editar una entrada
    public function edit($id)
    {
        $entrada = Entrada::findOrFail($id);
        return view('entradas', compact('entrada'));
    }

    // Actualiza una entrada en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'introduccion' => 'required',
        ]);

        $entrada = Entrada::findOrFail($id);
        $entrada->update([
            'slug' => $request->slug,
            'titulo' => $request->titulo,
            'introduccion' => $request->introduccion,
        ]);

        return redirect()->route('entradas')->with('success', 'Entrada actualizada exitosamente.');
    }

    // Elimina una entrada
    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return redirect()->route('entradas')->with('success', 'Entrada eliminada exitosamente.');
    }
}
