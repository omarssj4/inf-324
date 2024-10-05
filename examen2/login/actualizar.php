<?php
include "../conexion.php";
$id=$_GET["codigo"];
$sql="select * from catastro where cod_catastro='".$id."'";
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
    <h2 class="text-center">Actualizar Catastro</h2>
    <form action="editar.php" method="GET">
        <div class="row mb-3">
            <label for="nombre" class="col-sm-2 col-form-label">Codigo de Catastro</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['cod_catastro'];?>" class="form-control"  name="cod_catastro" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="apellido" class="col-sm-2 col-form-label">Distrito</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['distrito'];?>"class="form-control" id="distrito" name="distrito" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Zona</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['zona'];?>" class="form-control" id="zona" name="zona" required>
            </div>
        </div>

       <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Macro Distrito</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['Macro_distrito'];?>" class="form-control" id="Macro_distrito" name="Macro_distrito" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Tipo de Impuesto</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['tipo_impuesto'];?>" class="form-control" id="tipo_impuesto" name="tipo_impuesto">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Superficie</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['superficie'];?>" class="form-control" name="superficie">
            </div>
        </div>

        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Valor Catastral</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['valor_catastral'];?>" class="form-control" name="valor_catastral">
            </div>
        </div>
        <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Tipo de Propiedad</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $fila['tipo_propiedad'];?>" class="form-control" name="tipo_propiedad">
            </div>
        </div>
        <div class="row mb-3">
            <label for="genero" class="col-sm-2 col-form-label">Nombre del Propietario</label>
            <div class="col-sm-10">
                <select class="form-select" name="ci" required>
                <?php
                $sql ="SELECT p.ci,p.nombre,p.paterno,p.materno FROM persona p,catastro c where p.ci=c.ci";
                $resultado = mysqli_query($con, $sql);
                while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $fila['ci'] . "'>" . $fila['nombre'] . " ". $fila['paterno'] ." ". $fila['materno'] ."</option>";
                    }
                ?>
                </select>
            </div>
        </div>
         <div class="row mb-3">
            <label for="direccion" class="col-sm-2 col-form-label">Fecha de Registro</label>
            <div class="col-sm-10">
                <input type="date" value="<?php echo $fila['fecha_registro'];?>" class="form-control" name="fecha_registro">
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