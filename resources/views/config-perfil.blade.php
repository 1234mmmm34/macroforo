<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macronnect Docs</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style-documents.css') !!}">
</head>

<body style="overflow: hidden">

    <header class="d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{ asset('images/logo1.png') }}" alt="Mi Aplicación" style="height: 50px; width: auto;"
                    class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Preguntas frecuentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="margin-right: 10px;">Nuestro ERP</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link active" aria-current="page">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid" style="overflow: hidden">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item menu">
                            <a class="nav-link load-entry" href="javascript:void(0);">
                                <i class="fas fa-user-circle"></i> Mi perfil
                            </a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link load-entry" href="javascript:void(0);">
                                <i class="fas fa-tags"></i> Agregar categoría
                            </a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link load-entry" href="javascript:void(0);">
                                <i class="fas fa-plus-circle"></i> Agregar entrada
                            </a>
                        </li>
                        <li class="nav-item menu">
                            <a class="nav-link load-entry" href="javascript:void(0);">
                                <i class="fas fa-sign-out-alt"></i> Salir
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Contenido Principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4"  id="content-area">
                <!--     
                    <h1>Seleccione una entrada</h1>
                <p>Haz clic en una entrada del menú lateral para ver más detalles.</p>
            
-->

            </main>
        </div>
    </div>

    <!-- Bootstrap JS y Popper.js (necesario para algunos componentes de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function () {
        // Detectar clic en un enlace del submenú
        $('.load-entry').on('click', function () {
            var entryName = $(this).text().trim(); // Obtener el nombre del enlace (ej: "Agregar categoría")

            // Verificar cuál opción se ha seleccionado
            if (entryName === 'Agregar categoría') {
                $.ajax({
                    url: '/config-perfil/categorias', // Ruta para cargar la vista de "categoria"
                    method: 'GET',
                    success: function (response) {
                        // Actualizar el contenido del área principal con la vista de categoría
                        $('#content-area').html(response); // La vista ya debe contener el HTML necesario para "Agregar categoría"
                    },
                    error: function () {
                        alert('Hubo un error al cargar la vista de agregar categoría.');
                    }
                });
            }
            // Si se selecciona otro enlace (como "Mi perfil", "Agregar entrada", etc.), puedes agregar lógica similar.
            else if (entryName === 'Mi perfil') {
                $.ajax({
                    url: '/perfil', // Ruta para cargar la vista de perfil
                    method: 'GET',
                    success: function (response) {
                        $('#content-area').html(response); // La vista de perfil se cargará aquí
                    },
                    error: function () {
                        alert('Hubo un error al cargar la vista de perfil.');
                    }
                });
            }

            else if (entryName === 'Agregar entrada') {
                $.ajax({
                    url: '/entradas', // Ruta para cargar la vista de perfil
                    method: 'GET',
                    success: function (response) {
                        $('#content-area').html(response); // La vista de perfil se cargará aquí
                    },
                    error: function () {
                        alert('Hubo un error al cargar la vista de perfil.');
                    }
                });
            }
            // Añadir lógica para otros enlaces si es necesario
            
        });
    });
</script>

</body>

</html>