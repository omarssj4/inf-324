<?php
// Obtener el código catastral desde el formulario
$codigo_catastral = $_GET['codigo'];

// Construir la URL del servlet Java con el código catastral
$url = 'http://localhost:8080/WebApplication2/NewServlet?codigo_catastral=' . urlencode($codigo_catastral);

// Redirigir la solicitud al servlet
header("Location: $url");
exit();
?>