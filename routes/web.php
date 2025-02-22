<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  // Asegúrate de importar el controlador correctamente
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\FirebaseStorageController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RepositorioController;

// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de login (redirige a home.blade.php)
Route::get('/login', function () {
    return view('home'); // Esto carga la vista home.blade.php
});

// Ruta para la página de perfil (redirige a perfil.blade.php)
Route::get('/perfil', function () {
    return view('perfil'); // Esto carga la vista perfil.blade.php
});

// Ruta para la página de registro (redirige a register.blade.php)
Route::get('/register', function () {
    return view('register'); // Esto carga la vista register.blade.php
});

// Rutas para la página de entradas
Route::get('/entradas', function () {
    return view('auth.entradas'); // Carga la vista de entradas
});

// Ruta para la página de documentos
Route::get('/documents', function () {
    return view('auth.documents'); // Carga la vista de documentos
});


// Ruta para la página de perfil de configuración
Route::get('/config-perfil', function () {
    return view('config-perfil'); // Carga la vista config-perfil.blade.php
});

// Rutas de autenticación (esto incluye login, registro, etc.)
Auth::routes();

// Ruta para la página home después de iniciar sesión
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas para el controlador de empleados (CRUD)
Route::resource('empleados', EmpleadoController::class);
Route::resource('entradas', EntradasController::class);
Route::resource('categorias', CategoriaController::class);

// Rutas para Entradas
Route::post('/entradas', [EntradasController::class, 'store'])->name('entradas.store');
Route::get('/entradas', [EntradasController::class, 'index'])->name('entradas.index');

// Rutas para Documentos
Route::get('/documents', [DocumentsController::class, 'index'])->name('documents.index');
Route::get('/documents/{slug}', [DocumentsController::class, 'show'])->name('documents.show');

// Ruta para eliminar categoría
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

// Ruta para agregar una nueva categoría
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

// Ruta para subir una imagen a Firebase
Route::post('/upload-image', [FirebaseStorageController::class, 'uploadImage'])->name('upload.image');

// Rutas de autenticación y otras rutas (las mismas que ya tenías)
//Route::resource('/categorias', CategoriaController::class); // Esto ya maneja todas las rutas CRUD para categorias

Route::prefix('config-perfil')->group(function () {
    // Ruta para categorías
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('config-perfil.categorias');
    Route::post('/categorias', [CategoriaController::class, 'store'])->name('config-perfil.categorias.store');
    Route::post('/categorias', [CategoriaController::class, 'getData'])->name('config-perfil.categorias.data');


});