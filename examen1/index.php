<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra Lateral con Bootstrap</title>
  <!-- Incluir el CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Barra lateral personalizada */
    .sidebar {
      height: 100vh; /* Altura completa de la ventana */
      background-color: #343a40;
      padding-top: 20px;
      position: fixed; /* Fija en la pantalla */
      top: 0;
      left: 0;
      width: 250px; /* Ancho de la barra lateral */
    }

    .sidebar a {
      color: #ddd;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
      font-size: 18px;
    }

    .sidebar a:hover {
      background-color: #575757;
      color: white;
    }

    /* Para el contenido principal */
    .content {
      margin-left: 250px; /* Para no tapar el contenido con la barra lateral */
      padding: 20px;
    }

    /* Responsivo: barra lateral oculta en pantallas pequeñas */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
      }
      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <div>
<header class= "" style="background-color: #76d7c4 ;">
    <center><img src="logo_lp.png" alt="centered image" width="490" height="189"></center> 
  </header>
</div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">INICIO</a>
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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inciar Sesion</a>
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
      <!-- Barra lateral -->
      <section class="col-2 sidebar">
        <h4 class="text-white text-center">Menú</h4>
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Servicios</a>
        <a href="#">Contactos</a>
        <a href="#">Salir</a>
      </section>

      <!-- Contenido principal -->
      <section class="col-10 content">
        <h1>Bienvenido</h1>
        <p>Este es el contenido principal de la página. Aquí puedes agregar cualquier información adicional.</p>
      </section>
    </div>
  </div>

  <!-- Incluir el JS de Bootstrap y su dependencia Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>