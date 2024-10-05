<?php
include "../conexion.php";
$ci=$_GET["ci"];
$sql ="DELETE FROM persona WHERE persona.ci ='".$ci."'";
$resultado=mysqli_query($con, $sql);
header("Location: ../login/index.php")
?>