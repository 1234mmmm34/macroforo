<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrar Archivos por Metadatos</title>

    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Agregar CSS de DataTables -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Agregar JS de DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style-documents.css') !!}">
</head>

<body>

    <div class="container my-5">

   
        <h2 class="mb-4">Busca en nuestra documentación</h2>

        <!-- Tabla -->
        <table id="filesTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Palabras clave</th>
                    <th>Descripción</th>
                    <th>Contenido</th>
                    <th>Acciones</th> <!-- Nueva columna para los botones de editar y eliminar -->
                </tr>
            </thead>
            <tbody>
                <!-- Los datos de la tabla se llenarán dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        const data = [
            { nombre: "Archivo 1", palabrasClave: "Administrativo, Informe", descripcion: "Descripción del archivo 1", contenido: "Contenido del archivo 1", categoria: "Administrativo", archivo: "archivo1.pdf" },
            { nombre: "Archivo 2", palabrasClave: "Operativo, Plan", descripcion: "Descripción del archivo 2", contenido: "Contenido del archivo 2", categoria: "Operativo", archivo: "archivo2.pdf" },
            { nombre: "Archivo 3", palabrasClave: "Administrativo, Informe", descripcion: "Descripción del archivo 3", contenido: "Contenido del archivo 3", categoria: "Administrativo", archivo: "archivo3.pdf" },
            { nombre: "Archivo 4", palabrasClave: "Operativo, Plan", descripcion: "Descripción del archivo 4", contenido: "Contenido del archivo 4", categoria: "Operativo", archivo: "archivo4.pdf" },
            { nombre: "Archivo 5", palabrasClave: "Otro, Proyecto", descripcion: "Descripción del archivo 5", contenido: "Contenido del archivo 5", categoria: "Otro", archivo: "archivo5.pdf" }
        ];

        // Cargar datos en la tabla
        function loadTableData(filteredData = data) {
            const tableBody = document.querySelector("#filesTable tbody");
            tableBody.innerHTML = ""; // Limpiar tabla

            filteredData.forEach((item, index) => {
                const row = document.createElement("tr");
                row.setAttribute('data-index', index); // Agregar un atributo de índice a la fila
                row.innerHTML = `
                <td class="editable">${item.nombre}</td>
                <td class="editable">${item.palabrasClave}</td>
                <td class="editable">${item.descripcion}</td>
                <td class="editable">${item.contenido}</td>
                <td>
                    <button class="btn btn-warning btn-sm edit-btn" data-index="${index}">Editar</button>
                    <button class="btn btn-danger btn-sm delete-btn" data-index="${index}">Eliminar</button>
                </td>
            `;
                tableBody.appendChild(row);
            });

            // Inicializar DataTable si no está ya inicializado
            if ($.fn.dataTable.isDataTable('#filesTable')) {
                $('#filesTable').DataTable().clear().destroy();
            }

            $('#filesTable').DataTable(); // Inicializa el DataTable
        }

        // Editar fila
        function editRow(index) {
            const row = data[index];
            const columns = document.querySelectorAll(`#filesTable tbody tr[data-index="${index}"] td.editable`);

            columns[0].innerHTML = `<input type="text" value="${row.nombre}">`;
            columns[1].innerHTML = `<input type="text" value="${row.palabrasClave}">`;
            columns[2].innerHTML = `<input type="text" value="${row.descripcion}">`;
            columns[3].innerHTML = `<input type="text" value="${row.contenido}">`;

            const editBtn = document.querySelector(`#filesTable tbody tr[data-index="${index}"] .edit-btn`);
            editBtn.innerHTML = 'Guardar';
            editBtn.onclick = function () {
                saveRow(index);
            };
        }

        // Guardar cambios en la fila
        function saveRow(index) {
            const row = data[index];
            const columns = document.querySelectorAll(`#filesTable tbody tr[data-index="${index}"] td.editable`);

            row.nombre = columns[0].querySelector('input').value;
            row.palabrasClave = columns[1].querySelector('input').value;
            row.descripcion = columns[2].querySelector('input').value;
            row.contenido = columns[3].querySelector('input').value;

            loadTableData();
        }

        // Eliminar fila
        function deleteRow(index) {
            data.splice(index, 1);
            loadTableData();
        }

        // Inicializar la tabla
        loadTableData();
    </script>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
