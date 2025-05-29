<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinaria Alex</title>
  

</head>
<?php include "referencias.php"; ?>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

    <div class="container-fluid">
      <a class="navbar-brand" href="Inicio.html"><i class="bi bi-house-heart-fill"></i> Veterinaria </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php"><i class="bi bi-house-fill"></i> Inicio</a>
          </li>

          <!-- Dropdown funcionando -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-gear-fill"></i> Gestor
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="frmClientes.php">Formulario de Clientes</a></li>
              <li><a class="dropdown-item" href="listaClientes.php">Lista de Clientes</a></li>
              <li><a class="dropdown-item" href="frmVeterinarios.php">Formulario de Veterinarios</a></li>
              <li><a class="dropdown-item" href="listaVeterinarios.php">Lista de Veterinarios</a></li>
              <li><a class="dropdown-item" href="frmMascotas.php">Formulario de Mascotas</a></li>
              <li><a class="dropdown-item" href="listaMascotas.php">Lista de Mascotas</a></li>
              <li><a class="dropdown-item" href="frmConsultas.php">Formulario de Consultas</a></li>
              <li><a class="dropdown-item" href="listaConsultas.php">Lista de Consultas</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="formulario.php"><i class=""></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="practica4.html" tabindex="-1" aria-disabled="true"></a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="practica5.html" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>



</body>
</html>
