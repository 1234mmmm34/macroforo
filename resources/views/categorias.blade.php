<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Agregar CSS de DataTables -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Agregar JS de DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style-categorias.css') !!}">
</head>

<body>

    <div class="container my-5">

        <h3 class="mb-4">Categorías</h3>
      

        <!-- Formulario para agregar nueva fila -->
        <div class="mb-4">

            <form id="addFileForm" action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <label for="nombre" class="form-label">Agregar categoría</label>
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>

                </div>

            </form>
        </div>

        <!-- Tabla -->
        <table id="categoriasTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoría</th>
                    <th>Agregada por</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Los datos de la tabla se llenarán dinámicamente -->
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->slug }}</td>
                    <td>{{ $categoria->usuario }}</td>
                    <td>{{ $categoria->fecha }}</td>
                    <td>
                        <form action="{{ route('categorias.destroy', $categoria->id_categoria) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
    </script>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>