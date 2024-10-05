<?php
include "../conexion.php";
session_start();
?>

<html >
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <header class= "" style="background-color: #76d7c4 ;">
    <center><img src="../img/logo_lp.png" alt="centered image" width="490" height="189"></center> 
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">INICIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tu Alcaldia
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Quienes Somos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Publicaciones</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tramites y Servicios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Impuestos Municipales</a></li>
              <li><a class="dropdown-item" href="#">Negocios y Comercios</a></li>
              <li><a class="dropdown-item" href="#">Catastro y territorio</a></li>
              <li><a class="dropdown-item" href="#">Servicios Sociales</a></li>
              <li><a class="dropdown-item" href="#">Otros</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Gobierno Abierto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Salud</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Normativa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contactos</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Busqueda</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <section class="col-2">
        <nav class="nav flex-column navbar navbar-expand-lg bg-body-tertiary">
          <a class="navbar-brand" aria-current="page" href="#">Hola <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></a>
          <a class="navbar-brand" aria-current="page" href="" >Buscar por carnet</a>
          <a class="navbar-brand" aria-current="page" href="#" >Tramites</a>
          <a class="navbar-brand" aria-current="page" href="cerrar.php">Cerrar Sesion</a>
        </nav>
      </section>
      <section class="col-10">

        <form action="index1.php" method="GET">
          <div class="container-fluid">
            <input type="text" class="form-control" name="ci" required>
            <button class="btn btn-outline-success" type="submit">Busqueda por C.I.</button>
          </div>
          <table class="table table-striped">
            <tr>
              <th>Codigo Catastro</th>
              <th>Distrito</th>
              <th>Zona</th>
              <th>Macro Distrito</th>
              <th>Superficie</th>
              <th>Valor Catastral</th>
              <th>Tipo de Propiedad</th>
              <th>Carnet del Propietario</th>
              <th>Fecha de Registro</th>
            </tr>
            <?php
              $ci = $_GET["ci"];
              $sql="select* from catastro where catastro.ci='".$ci."'";
              $resultado= mysqli_query($con,$sql);
            while($fila=mysqli_fetch_array($resultado))
            {
              echo"<tr>";
              echo"<td>".$fila["cod_catastro"]."</td>";
              echo"<td>".$fila["distrito"]."</td>";
              echo"<td>".$fila["zona"]."</td>";
              echo"<td>".$fila["Macro_distrito"]."</td>";
              echo"<td>".$fila["superficie"]."</td>";
              echo"<td>".$fila["valor_catastral"]."</td>";
              echo"<td>".$fila["tipo_propiedad"]."</td>";
              echo"<td>".$fila["ci"]."</td>";
              echo"<td>".$fila["fecha_registro"]."</td>";
              echo"<td>";
              echo"<a href='procesar.php?codigo=".$fila["cod_catastro"]."' class='btn btn-success'>Tipo de Impuesto</a>";
              echo"</td>";
              echo"</tr>";
            }
            ?>
          </table>
        </form>
      </div>
      <script>
        $(document).ready(function() {
        // Al hacer clic en el botón "Mostrar Tabla 1", mostramos la Tabla 1 y ocultamos la Tabla 2
          $("#showTable1").click(function() {
            $("#tabla1").show();  // Mostrar Tabla 1
            $("#tabla2").hide();  // Ocultar Tabla 2
          });

        // Al hacer clic en el botón "Mostrar Tabla 2", mostramos la Tabla 2 y ocultamos la Tabla 1
          $("#showTable2").click(function() {
            $("#tabla2").show();  // Mostrar Tabla 2
            $("#tabla1").hide();  // Ocultar Tabla 1
          });
        });
      </script>
    </section>
  </div>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </footer>
  </div>
</body>
</html>
