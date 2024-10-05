<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root"; 
$password = "";
$database = "bdomar"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables para mostrar los resultados
$tipos_impuestos = [];
$error = "";

// Función para obtener todos los códigos catastrales
function getCodigosCatastrales($conn) {
    $sql = "SELECT cod_catastro FROM catastro";
    $result = $conn->query($sql);
    $codigos = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $codigos[] = $row['cod_catastro'];
        }
    }
    
    return $codigos;
}

// Llamar a la API de C# para obtener los tipos de impuestos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener todos los códigos catastrales
    $codigos_catastrales = getCodigosCatastrales($conn);
    
    // Construir la URL para enviar los códigos catastrales a la API de C#
    $url = "http://localhost:5000/api/catastro/getTiposImpuestos?" . http_build_query(['codigos_catastrales' => $codigos_catastrales]);

    // Usar cURL para enviar la solicitud GET
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Verificar si la respuesta es correcta
    if ($response) {
        $tipos_impuestos = json_decode($response, true);
    } else {
        $error = "Error al consultar los tipos de impuesto";
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Tipos de Impuesto por Código Catastral</title>
</head>
<body>

<h1>Consultar Tipos de Impuesto por Códigos Catastrales</h1>

<!-- Botón para realizar la consulta -->
<form action="" method="POST">
    <input type="submit" value="Consultar Tipos de Impuesto">
</form>

<?php
// Mostrar los tipos de impuesto obtenidos
if (!empty($tipos_impuestos)) {
    echo "<h2>Tipos de Impuesto:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Código Catastral</th>
                <th>Tipo de Impuesto</th>
            </tr>";
    $i = 0;
    foreach ($tipos_impuestos as $tipo) {
        echo "<tr>
                <td>{$codigos_catastrales[$i]}</td>
                <td>{$tipo}</td>
              </tr>";
        $i++;
    }
    echo "</table>";
}

if (!empty($error)) {
    echo "<p style='color: red;'>$error</p>";
}
?>

</body>
</html>