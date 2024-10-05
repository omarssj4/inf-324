<?php
include "../conexion.php";
$ci=$_GET["ci"];
$sql="select * from persona where ci='".$ci."'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
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
    <h2 class="text-center">Actualizar Persona</h2>
    <form action="editarp.php" method="GET">
        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Carnet d Identidad</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['ci'];?>" class="form-control"  name="ci" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['nombre'];?>"class="form-control" id="nombre" name="nombre" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Paterno</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['paterno'];?>" class="form-control" id="paterno" name="paterno" required>
            </div>
        </div>

       <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Materno</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['materno'];?>" class="form-control" id="materno" name="materno" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">direccion</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['direccion'];?>" class="form-control" id="direccion" name="direccion">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['telefono'];?>" class="form-control" name="telefono">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['email'];?>" class="form-control" name="email">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Actualizar Catastro</button>
            </div>
        </div>
    </form>
</div>

<!-- Incluir Bootstrap JS y sus dependencias -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>