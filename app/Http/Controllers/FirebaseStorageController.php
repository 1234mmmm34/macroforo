<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Storage;
use Illuminate\Http\Request;

class FirebaseStorageController extends Controller
{
    protected $firebaseStorage;

    // Inyectamos la dependencia de Firebase Storage
    public function __construct(Storage $firebaseStorage)
    {
        $this->firebaseStorage = $firebaseStorage;
    }

    // Método para cargar la imagen
    public function uploadImage(Request $request)
    {
        // Validar que el archivo sea una imagen
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tamaño y tipo de archivo
        ]);

        // Obtener el archivo de la solicitud
        $image = $request->file('image');

        // Nombre único para la imagen
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Subir la imagen a Firebase Storage
        $bucket = $this->firebaseStorage->getBucket();
        $filePath = 'images/' . $imageName;  // Puedes cambiar la carpeta en Firebase Storage

        $bucket->upload(
            fopen($image->getRealPath(), 'r'),
            [
                'name' => $filePath,
            ]
        );

        // Devolver la URL del archivo subido
        $imageUrl = "https://firebasestorage.googleapis.com/v0/b/" . env('FIREBASE_STORAGE_BUCKET') . "/o/" . urlencode($filePath) . "?alt=media";

        return response()->json([
            'message' => 'Imagen subida correctamente a Firebase Storage.',
            'image_url' => $imageUrl,
        ]);
    }
}
