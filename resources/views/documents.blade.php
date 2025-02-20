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

<body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{ asset('images/logo1.png') }}" alt="Mi Aplicación" style="height: 50px; width: auto;" class="me-2">
            </a>
            <div class="search-div start-50" style="top: 20px;">
                <div class="input-group rounded" style="right: 10%; width: 100%">
                    <input type="search" class="form-control rounded rounded-end ins" placeholder="Buscar en la documentación..." aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Preguntas frecuentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="margin-right: 10px;">Nuestro ERP</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link active" aria-current="page">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i> Instalación
                            </a>
                        </li>
                        @foreach ($entradas as $entrada)
                        <li class="nav-item">
                            <a class="nav-link collapsed load-entry" href="javascript:void(0);" data-id="{{ $entrada->id }}">
                                <i class="fas fa-chevron-right arrow-icon"></i> {{ $entrada->titulo }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4" id="content-area">
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

    <!-- Script para manejar la carga de contenido con AJAX -->
    <script>
        $(document).ready(function() {
            // Detectar clic en un enlace del submenú
            $('.load-entry').on('click', function() {
                var entradaId = $(this).data('id'); // Obtener el ID de la entrada
                $.ajax({
                    url: '/documents/' + entradaId, // Llamada a la ruta para obtener la entrada
                    method: 'GET',
                    success: function(response) {

                        // Actualizar el contenido del área principal con los datos de la entrada
                        $('#content-area').html(`

                        <br>
                            <h1 style="font-weight: 600; color: #063970">${response.titulo}</h1>
                            <pre>
                            <p style="font-weight: 300; color: #063970; font-family: 'Poppins', sans-serif;">${response.introduccion}</p>
                          
                        `);
                        //  <p style="font-weight: 300; color: #063970; font-family: 'Poppins', sans-serif;">${response.introduccion}</p>
                    },
                    error: function() {
                        alert('Hubo un error al cargar la entrada.');
                    }
                });
            });
        });
    </script>
</body>

</html>
