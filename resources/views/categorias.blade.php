<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agregar entrada</title>
    <!-- Enlace a los archivos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style-entradas.css') !!}">
</head>

<body>

    <div class="container">
        <h1 style="font-weight: 600; color: #063970">Agregar categorias</h1>
        <form action="{{ route('entradas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Fila con dos columnas -->
            <div class="row">
                <!-- Primera columna para el formulario -->
                <div class="col-md-6">
                    <!-- Slug -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="slug" id="slug"
                            placeholder="Ejemplo: 'seguridad-perfil'" required>
                    </div>

                    <div class="d-flex justify-content-between accion-buttons">
                        <button type="submit" class="btn-custom btn-acciones"
                            style="background-color: #063970; border-color: #063970; font-weight:600">Enviar</button>
                        <button type="button" class="btn-secondary btn-acciones">Guardar Borrador</button>
                    </div>
                </div>


            <!-- Botones de acción -->

        </form>
    </div>

    <!-- Enlace a los archivos de JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
</body>

</html>