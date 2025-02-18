<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    // Muestra todas las entradas
    public function index()
    {
        // Obtener todas las entradas de la base de datos
        $entradas = Entrada::all();
        
        // Pasar las entradas a la vista 'auth.documents'
        return view('documents', compact('entradas'));
    }

    public function show($id)
    {
        $entrada = Entrada::findOrFail($id);
        return response()->json([
            'slug' => $entrada->slug,
            'titulo' => $entrada->titulo,
            'introduccion' => $entrada->introduccion,
        ]);
    }
}
