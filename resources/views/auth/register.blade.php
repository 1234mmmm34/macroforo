<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style-login.css') !!}">

</head>

<body>

    <!-- Navbar/Header de Bootstrap (Con menú hamburguesa) -->
    <header
        class="d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="{{ asset(path: 'images/logo1.png') }}" alt="Mi Aplicación" style="height: 50px; width: auto;"
                    class="me-2">
            </a>

            <!-- Botón hamburguesa para pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de navegación que se oculta en pantallas pequeñas -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Preguntas frecuentes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="margin-right: 10px;">Nuestro ERP</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Crear cuenta</a></li>
                </ul>
            </div>
        </div>
    </header>


    <div class="container mt-5 d-flex justify-content-start align-items-center">
        <!-- Imagen pegada a la izquierda -->

        <div class="loginimg1">
            <img src="{{ asset(path: 'images/loginimg1.png') }}" alt="Mi Aplicación">

        </div>


        <!-- Formulario de Inicio de Sesión -->
        <div class="form-inicio" style="width: 500px;">
            <h2 class="text-center mb-4">Iniciar sesión</h2>

            <!-- Formulario de Login -->
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña"
                        required>
                </div>

                <!-- Checkbox centrado -->
                <div class="mb-3 d-flex justify-content-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Recuérdame</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>

            <!-- Enlaces adicionales -->
            <div class="mt-3 text-center">
                <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
            </div>

            <!-- Enlace para crear nueva cuenta -->
            <div class="mt-3 text-center">
                <p>¿No tienes cuenta? <a href="#" class="text-decoration-none">Crear nueva cuenta</a></p>
            </div>
        </div>


        <div class="loginimg2">
            <img src="{{ asset(path: 'images/loginimg2.png') }}" alt="Mi Aplicación">

        </div>
    </div>




    <!-- Bootstrap JS y Popper.js (necesario para algunos componentes de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>