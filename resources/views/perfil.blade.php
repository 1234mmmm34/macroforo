<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de Perfil</title>

    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2 class="mb-4">Configuración de Perfil</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Nombre Completo:</label>
                    <input type="text" id="fullName" class="form-control" value="Juan Pérez">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" id="email" class="form-control" value="juan.perez@example.com">
                </div>
            </div>

            <div class="mb-3">
                <label for="profilePicture" class="form-label">Foto de Perfil:</label>
                <div class="d-flex align-items-center">
                    <img id="profilePreview" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Foto de Perfil" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">
                    <input type="file" id="profilePicture" class="form-control" accept="image/*">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" class="form-control" placeholder="********">
                </div>
                <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña:</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="********">
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>

    <script>
        // Vista previa de la foto de perfil
        document.getElementById('profilePicture').addEventListener('change', function (e) {
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.onload = function (event) {
                document.getElementById('profilePreview').src = event.target.result;
            };
            reader.readAsDataURL(file);
        });
    </script>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>


</html>
