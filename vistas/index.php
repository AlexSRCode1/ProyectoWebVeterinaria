<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Veterinaria Alex - Inicio</title>
  
</head>

<body>

  <?php include "menu.php"; ?>


  <!-- Hero Banner -->
  <section class="bg-primary text-white text-center py-5 mb-4">
    <div class="container">
      <h1 class="display-4 fw-bold">Bienvenidos al sistema Veterinaria </h1>
    </div>
  </section>

  <!-- Contenido con tarjetas -->
  <div class="container">
    <div class="row g-4">

      <div class="col-md-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-people-fill display-1 text-primary"></i>
            <h5 class="card-title mt-3">Clientes</h5>
            <p class="card-text">Administra la información de tus clientes.</p>
            <a href="listaClientes.php" class="btn btn-primary btn-sm">Ver clientes</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-heart-pulse-fill display-1 text-danger"></i>
            <h5 class="card-title mt-3">Veterinarios</h5>
            <p class="card-text">Gestiona los veterinarios y sus especialidades.</p>
            <a href="listaVeterinarios.php" class="btn btn-danger btn-sm">Ver veterinarios</a>
          </div>
        </div>
      </div>

    <div class="col-md-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
            <i class="bi bi-paw-fill display-1 text-warning"></i>
            <h5 class="card-title mt-3">Mascotas</h5>
            <p class="card-text">Administra y consulta información de las mascotas.</p>
            <a href="listaMascotas.php" class="btn btn-warning btn-sm text-dark">Ver mascotas</a>
            </div>
        </div>
    </div>


      <div class="col-md-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-journal-medical display-1 text-success"></i>
            <h5 class="card-title mt-3">Consultas</h5>
            <p class="card-text">Controla y administra las consultas médicas.</p>
            <a href="listaConsultas.php" class="btn btn-success btn-sm">Ver consultas</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer simple -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      &copy; <?php echo date("Y"); ?> Veterinaria. Todos los derechos reservados.
    </div>
  </footer>

</body>
</html>
