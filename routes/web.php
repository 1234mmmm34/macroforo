<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  // Asegúrate de importar el controlador correctamente
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\FirebaseStorageController;



// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de login (redirige a home.blade.php)
Route::get('/login', function () {
    return view('home'); // Esto carga la vista home.blade.php
});

// Ruta para la página de registro (redirige a register.blade.php)
Route::get('/register', function () {
    return view('register'); // Esto carga la vista register.blade.php
});

// Ruta para la página de registro (redirige a register.blade.php)
Route::get('/entradas', function () {
    return view('auth.entradas'); // Esto carga la vista register.blade.php
});


// Ruta para la página de registro (redirige a register.blade.php)
Route::get('/documents', function () {
    return view('auth.documents'); // Esto carga la vista register.blade.php
});


// Rutas de autenticación (esto incluye login, registro, etc.)
Auth::routes();

// Ruta para la página home después de iniciar sesión
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas para el controlador de empleados (CRUD)
Route::resource('empleados', EmpleadoController::class);
Route::resource('entradas', EntradasController::class);

Route::post('/entradas', [EntradasController::class, 'store'])->name('entradas.store');
//Route::get('/documents/{id}', [EntradasController::class, 'show'])->name('documents.show'); // Mostrar detalles de una entrada específica
Route::get('/entradas', [EntradasController::class, 'index'])->name('entradas.index');


Route::get('/documents', [DocumentsController::class, 'index'])->name('documents.index');

// Ruta para ver una entrada específica
Route::get('/documents/{slug}', [DocumentsController::class, 'show'])->name('documents.show');


//Ruta para subir una imagen a Firebase
Route::post('/upload-image', [FirebaseStorageController::class, 'uploadImage'])->name('upload.image');
