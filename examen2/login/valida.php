<?php
include "../conexion.php";
session_start(); // Inicia la sesión

$nombre=$_GET["usuario"];
$pass=$_GET["contrasenia"];
$sql="select nombre_usuario,apellido from usuario where nombre_usuario='$nombre'and password='$pass' and rol=1";
$resultado= mysqli_query($con,$sql);

if ($resultado->num_rows > 0) {
        // Si el usuario y la contraseña son correctos, almacenamos la sesión

  while ($fila = mysqli_fetch_assoc($resultado)) {
        // Accedemos a los campos de cada fila
    $_SESSION['nombre'] = $fila['nombre_usuario'];
    $_SESSION['apellido'] = $fila['apellido'];
    header("Location: index.php");
  }
        // Redirigir al funcionario a la página principal (index.php)
} else {
        // Si el usuario o la contraseña son incorrectos
 $sql="select nombre_usuario,apellido from usuario where nombre_usuario='$nombre'and password='$pass' and rol=0";
 $resultado= mysqli_query($con,$sql);
 if ($resultado->num_rows > 0) {
        // Si el usuario y la contraseña son correctos, almacenamos la sesión

  while ($fila = mysqli_fetch_assoc($resultado)) {
        // Accedemos a los campos de cada fila
    $_SESSION['nombre'] = $fila['nombre_usuario'];
    $_SESSION['apellido'] = $fila['apellido'];
    header("Location: index1.php");
  }
}else {
  header("Location: ../index.php");
}
}


?>
