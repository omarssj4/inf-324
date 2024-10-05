<?php
include "../conexion.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$direccion=$_GET["direccion"];
$telefono=$_GET["telefono"];
$email=$_GET["email"];
$sql = "update persona set  nombre='".$nombre."', 
paterno='".$paterno."', materno='".$materno."',
 direccion='".$direccion."',telefono='".$telefono."',email='".$email."' where ci='".$ci."'";
$resultado=mysqli_query($con, $sql);
header("Location: ../login/index.php")
?>