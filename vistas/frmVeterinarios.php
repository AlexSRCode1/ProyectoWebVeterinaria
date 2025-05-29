<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Veterinario</title>

   <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>


</head>
<body>
<div class="container mt-5">
  <h2>Registrar Veterinario</h2>
  <form action="../controladores/crearVeterinarios.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Especialidad</label>
      <input type="text" name="especialidad" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Teléfono</label>
      <input type="text" name="telefono" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
</body>
</html>
