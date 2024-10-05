<?php
include "../conexion.php";
$catastro=$_GET["cod_catastro"];
$distrito=$_GET["distrito"];
$zona=$_GET["zona"];
$Macro_distrito=$_GET["Macro_distrito"];
$superficie=$_GET["superficie"];
$valor_catastral=$_GET["valor_catastral"];
$tipo_propiedad=$_GET["tipo_propiedad"];
$ci=$_GET["ci"];
$fecha=date("Y/m/d", strtotime($_GET['fecha_registro']));
$sql = "update catastro set  distrito='".$distrito."',cod_catastro='".$catastro."', 
zona='".$zona."', Macro_distrito='".$Macro_distrito."',superficie='".$superficie."',valor_catastral='".$valor_catastral."',tipo_propiedad='".$tipo_propiedad."',tipo_propiedad='".$tipo_propiedad."',ci='".$ci."',fecha_registro='".$fecha."'where cod_catastro='".$catastro."'";
$resultado=mysqli_query($con, $sql);
header("Location: index.php")
?>