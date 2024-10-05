<?php
include "../conexion.php";
$catastro=$_GET["cod_catastro"];
$distrito=$_GET["distrito"];
$zona=$_GET["zona"];
$Macro_distrito=$_GET["Macro_distrito"];
$tipo_impuesto=$_GET["tipo_impuesto"];
$superficie=$_GET["superficie"];
$valor_catastral=$_GET["valor_catastral"];
$tipo_propiedad=$_GET["tipo_propiedad"];
$ci=$_GET["ci"];
$fecha=date("Y/m/d", strtotime($_GET['fecha_registro']));
printf($distrito);




$sql = "insert into catastro values( '".$catastro."','".$distrito."','".$zona."','".$Macro_distrito."','".$tipo_impuesto."','".$superficie."','".$valor_catastral."','".$tipo_propiedad."','".$ci."','".$fecha."')";
$resultado=mysqli_query($con, $sql);
header("Location: index.php");
?>