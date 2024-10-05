<?php
include "../conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Agregar Persona</title>
    <!-- Incluir Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Agregar Persona</h2>
    <form action="agregarp.php" method="GET">
        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Carnet de Identidad</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="ci" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"name="nombre" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Paterno</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="paterno" required>
            </div>
        </div>

       <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Materno</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="materno" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="telefono">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="email">
            </div>
        </div>
       
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Añadir Persona</button>
            </div>
        </div>
    </form>
</div>

<!-- Incluir Bootstrap JS y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>