<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macronnect docs</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>

<body>

    <!-- Navbar/Header de Bootstrap (Con menú hamburguesa) -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{ asset('images/logo1.png') }}" alt="Mi Aplicación" style="height: 50px; width: auto;" class="me-2">
            </a>

            <!-- Botón hamburguesa para pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de navegación que se oculta en pantallas pequeñas -->
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

    <!-- Contenedor con la imagen de fondo que ocupa toda la pantalla -->
    <div class="container-fluid p-0 position-relative">
        <img src="{{ asset('images/home.png') }}" alt="Imagen de inicio" class="img-fluid w-100" style="object-fit: cover; height: 70vh;">

        <!-- Contenedor para el texto y la barra de búsqueda -->
        <div class="position-absolute start-50 translate-middle text-center text-white w-75" style="top: 300px">
            <!-- Texto sobre la imagen -->
            <h1 class="display-3 fw-bold title">Documentación de Macronnect ERP</h1>
            <p class="lead">Encuentra guías detalladas, tutoriales y recursos que te ayudarán a sacar el máximo provecho
                de Macronnect ERP, sin importar si eres un usuario avanzado o novato.</p>
        </div>

        <!-- Barra de búsqueda centrada pero más abajo del texto -->
        <div class="search-div start-50 " style="top: 450px;">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded rounded-end ins" placeholder="Buscar en la documentación..."
                    aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>

<!-- Contenedor para las tarjetas -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Primera tarjeta (Categoría 1) -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/descargar.png') }}" class="card-img-top" alt="Categoría 1">
                <div class="card-body">
                    <h5 class="card-title">Instalación de Macronnect ERP</h5>
                    <p class="card-text">Descripción breve de la categoría 1. Puedes agregar más detalles aquí.</p>
                    <a href="#" class="btn btn-primary button">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta (Categoría 2) -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/operativos.png') }}" class="card-img-top" alt="Categoría 2">
                <div class="card-body">
                    <h5 class="card-title">Manuales para operativos</h5>
                    <p class="card-text">Descripción breve de la categoría 2. Puedes agregar más detalles aquí.</p>
                    <a href="#" class="btn btn-primary button">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Tercera tarjeta (Categoría 3) -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/administrativos.png') }}" class="card-img-top" alt="Categoría 3">
                <div class="card-body">
                    <h5 class="card-title">Manuales para administrativos</h5>
                    <p class="card-text">Descripción breve de la categoría 3. Puedes agregar más detalles aquí.</p>
                    <a href="#" class="btn btn-primary button">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>

    <main class="container mt-5">
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <!-- Sección de enlaces rápidos -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Enlaces rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Preguntas frecuentes</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Nuestro ERP</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Iniciar sesión</a></li>
                    </ul>
                </div>

                <!-- Sección de contacto -->
                <div class="col-md-4 mb-3">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><a href="mailto:contacto@miempresa.com" class="text-white text-decoration-none">contacto@miempresa.com</a></li>
                        <li><a href="tel:+1234567890" class="text-white text-decoration-none">+123 456 7890</a></li>
                    </ul>
                </div>

                <!-- Sección de redes sociales -->
                <div class="col-md-4 mb-3">
                    <h5>Síguenos</h5>
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li><a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-3">
                <div class="col-12">
                    <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS y Popper.js (necesario para algunos componentes de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
