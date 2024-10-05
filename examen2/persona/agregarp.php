<?php
include "../conexion.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$direccion=$_GET["direccion"];
$telefono=$_GET["telefono"];
$email=$_GET["email"];
$sql = "insert into persona values( '".$ci."','".$nombre."','".$paterno."','".$materno."','".$direccion."','".$telefono."','".$email."')";
$resultado=mysqli_query($con, $sql);
header("Location: ../login/index.php")
?>