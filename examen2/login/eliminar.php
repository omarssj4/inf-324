<?php
include "../conexion.php";
$catastro=$_GET["codigo"];
$sql ="DELETE FROM catastro WHERE catastro.cod_catastro ='".$catastro."'";
$resultado=mysqli_query($con, $sql);
header("Location: index.php")
?>