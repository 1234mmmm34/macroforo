<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mi Aplicación</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head> 

<body>

    <!-- Navbar/Header de Bootstrap (Con menú hamburguesa) -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom navbar navbar-expand-lg navbar-light bg-light">
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
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Preguntas frecuentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="margin-right: 10px;">Nuestro ERP</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Contenedor del Formulario de Inicio de Sesión -->
    <div class="container mt-5" style="max-width: 500px;">
        <h2 class="text-center mb-4">Iniciar sesión</h2>
        
        <!-- Formulario de Login -->
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Recuérdame</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        </form>

        <!-- Enlace a recuperación de contraseña -->
        <div class="mt-3 text-center">
            <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-4 mt-5">
        <div class="container">
            <!-- Sección de enlaces rápidos -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Enlaces rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
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
