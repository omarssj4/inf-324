<?php
include "../conexion.php";
session_destroy();

// Redirigimos al usuario a la página de inicio o login
header("Location: ../index.php");
exit(); 
?>
