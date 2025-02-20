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
        <h1 style="font-weight: 600; color: #063970">Agregar entrada</h1>
        <form action="{{ route('entradas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Fila con dos columnas -->
            <div class="row">
                <!-- Primera columna para el formulario -->
                <div class="col-md-6">
                    <!-- Slug -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug"
                            placeholder="Ejemplo: 'seguridad-perfil'" required>
                    </div>

                    <!-- Titulo -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo"
                            placeholder="Ejemplo: 'Perfil de seguridad'" required>
                    </div>

                    <!-- Introducción -->
                    <div class="mb-3">
                        <label for="introduccion" class="form-label">Introducción</label>
                        <textarea class="form-control" id="introduccion" name="introduccion" rows="9"
                            placeholder="Escribe la introducción de tu entrada." required></textarea>
                    </div>

                    <!-- Botón para agregar más secciones -->
                    <div class="opc">
                        <button type="button" id="addSubtemaButton" class="btn-secondary mt-3">Empezar nuevo
                            subtema</button>
                        <button type="button" id="addParrafoButton" class="btn-secondary mt-3">Agregar un
                            párrafo</button>
                        <button type="button" id="addImagenButton" class="btn-secondary mt-3">Agregar una
                            imagen</button>
                    </div>


                    <div class="d-flex justify-content-between accion-buttons">
                        <button type="submit" class="btn-custom btn-acciones"
                            style="background-color: #063970; border-color: #063970; font-weight:600">Enviar</button>
                        <button type="button" class="btn-secondary btn-acciones">Guardar Borrador</button>
                    </div>
                </div>

                <!-- Segunda columna para los subtemas con scroll -->
                <div class="col-md-6 scrollable-column">
                    <div class="mb-3">
                        <h5 class="form-label">Secciones o subtemas</h5>

                        <!-- Imagen plantilla -->
                        <div id="plantillaImage" class="text-center mb-3 nav-link">
                            <p>Agrega un nuevo subtema, un párrafo o una imagen para construir tu entrada, recuerda que
                                el orden en el que agregues los elementos será el orden de la estructura de la página
                            </p>
                            <img src="{{ asset('images/plantilla1.png') }}" alt="Mi Aplicación" class="me-2 img-def">
                        </div>

                        <div id="subtemasContainer">
                            <!-- Los subtemas se agregarán aquí -->
                        </div>
                    </div>
                </div>

            </div>

            <!-- Botones de acción -->

        </form>
    </div>

    <!-- Enlace a los archivos de JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para agregar subtemas y párrafos dinámicamente -->
    <script>
        let subtemaIndex = 1;  // Contador para los subtemas
        let parrafoIndex = 1;  // Contador para los párrafos

        const addSubtemaButton = document.getElementById('addSubtemaButton');
        const addParrafoButton = document.getElementById('addParrafoButton');
        const subtemasContainer = document.getElementById('subtemasContainer');
        const plantillaImage = document.getElementById('plantillaImage'); // Obtener la imagen plantilla
        const addImagenButton = document.getElementById('addImagenButton');


        // Función para agregar un nuevo subtema
        addSubtemaButton.addEventListener('click', function () {
            const newSubtema = document.createElement('div');
            newSubtema.classList.add('subtema-item');
            newSubtema.id = `subtemaItem-${subtemaIndex}`;

            newSubtema.innerHTML = `
                <div class="mb-3">
                    <div class="opc">
                        <input type="text" class="form-control" name="subtema_${subtemaIndex}" id="subtema-${subtemaIndex}" placeholder="Nombre del subtema ${subtemaIndex}" required>
                        <button type="button" class="remove-subtema-item mt-2 delete" data-item="${subtemaIndex}">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            `;
            subtemasContainer.appendChild(newSubtema);
            subtemaIndex++;
            plantillaImage.style.display = 'none';
        });

        // Función para agregar un nuevo párrafo
        addParrafoButton.addEventListener('click', function () {
            const newParrafo = document.createElement('div');
            newParrafo.classList.add('parrafo-item');
            newParrafo.id = `parrafoItem-${parrafoIndex}`;

            newParrafo.innerHTML = `
                <div class="mb-3">
                    <div class="opc">
                        <textarea class="form-control" name="parrafo_${parrafoIndex}" id="parrafo-${parrafoIndex}" rows="4" placeholder="Escribe un párrafo ${parrafoIndex}" required></textarea>
                        <button type="button" class="remove-parrafo-item mt-2 delete" data-item="${parrafoIndex}">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            `;
            subtemasContainer.appendChild(newParrafo);
            parrafoIndex++;
            plantillaImage.style.display = 'none';
        });

        // Función para eliminar un subtema
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('remove-subtema-item')) {
                const itemId = e.target.getAttribute('data-item');
                const itemToRemove = document.getElementById(`subtemaItem-${itemId}`);
                if (itemToRemove) {
                    itemToRemove.remove();
                }
            }

            // Función para eliminar un párrafo
            if (e.target && e.target.classList.contains('remove-parrafo-item')) {
                const itemId = e.target.getAttribute('data-item');
                const itemToRemove = document.getElementById(`parrafoItem-${itemId}`);
                if (itemToRemove) {
                    itemToRemove.remove();
                }
            }

            // Función para eliminar una imagen
            if (e.target && e.target.classList.contains('remove-image-item')) {
                const itemId = e.target.getAttribute('data-item');
                const itemToRemove = document.getElementById(`image-${itemId}`);
                if (itemToRemove) {
                    itemToRemove.remove();
                }
            }

            // Verificar si ya no quedan subtemas o párrafos
            const subtemaItems = document.querySelectorAll('.subtema-item');
            const parrafoItems = document.querySelectorAll('.parrafo-item');
            const imageItems = document.querySelectorAll('.image-item');
            if (subtemaItems.length === 0 && parrafoItems.length === 0 && imageItems.length === 0) {
                plantillaImage.style.display = 'block';
            }
        });


        addImagenButton.addEventListener('click', function () {
            // Crear un nuevo input de tipo file
            const newImageUpload = document.createElement('div');
            newImageUpload.classList.add('image-upload-item');
            newImageUpload.innerHTML = `
        <div class="mb-3 image-inp">
            <div class="opc">
                <input type="file" name="image_${subtemaIndex}" id="image-${subtemaIndex}" class="form-control" accept="image/*" required>
                <button type="button" class="remove-image-item mt-2 delete" data-item="${subtemaIndex}">
                    <i class="fas fa-trash" aria-hidden="true"></i>
                </button>
            </div>
            <input type="text" style="width: 94%; margin-top: 5px;" class="form-control" name="pie-imagen" id="pie-imagen" placeholder="Agrega un pie de imagen" required>
        </div>
    `;
            subtemasContainer.appendChild(newImageUpload);

            // Asignar un evento al input de tipo file
            const inputFile = newImageUpload.querySelector('input[type="file"]');
            inputFile.addEventListener('change', function (e) {


                const file = e.target.files[0]; // Obtén el archivo seleccionado
                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function (event) {
                            // Crear un elemento <img> y asignarle la URL de la imagen cargada
                            const imgElement = document.createElement('img');
                            imgElement.src = event.target.result; // Utilizamos la URL creada por FileReader
                            imgElement.alt = 'Imagen seleccionada';
                            imgElement.classList.add('img-fluid', 'mt-3', 'imgAdd');

                            // Agregar la imagen a la vista previa
                            newImageUpload.appendChild(imgElement);


                        };

                        // Leer el archivo como URL de datos
                        reader.readAsDataURL(file);
                    }
                });

            // Agregar el evento para eliminar el contenedor de la imagen
            const removeButton = newImageUpload.querySelector('.remove-image-item');
            removeButton.addEventListener('click', function () {
                newImageUpload.remove();  // Eliminar el contenedor de la imagen
            });

            subtemaIndex++;
        });


    </script>

</body>

</html>