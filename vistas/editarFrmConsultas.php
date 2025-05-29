<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Consulta</title>

  <?php include "menu.php"; ?>
</head>
<body>

<?php
include('../modelos/conexion.php'); 

$id = $_REQUEST['ide'];

$query = "SELECT * FROM consultas WHERE id_consulta = '$id'";
$res = $conexion->query($query);
$row = $res->fetch_assoc();
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="col-md-6">
    <h2 class="text-center">Formulario de Edición de Consultas</h2>
    <form action="../controladores/editarConsultas.php?ide=<?php echo $row['id_consulta']; ?>" method="POST">

      <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control" value="<?php echo $row['fecha']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Motivo</label>
        <textarea name="motivo" class="form-control"><?php echo $row['motivo']; ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Tratamiento</label>
        <textarea name="tratamiento" class="form-control"><?php echo $row['tratamiento']; ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Mascota</label>
        <select name="id_mascota" class="form-select" required>
          <option value="">Seleccione...</option>
          <?php

            include('../modelos/conexion.php');
            $query = "SELECT `id_mascota`, `nombre` FROM `mascotas`";
            $res = $conexion->query($query);
            if ($res->num_rows > 0) {
                while ($mascotas = $res->fetch_array(MYSQLI_ASSOC)) {
                    $selected = $mascotas['id_mascota'] == $row['id_mascota'] ? 'selected' : '';
                    echo "<option value='".$mascotas['id_mascota']."' $selected>".$mascotas['nombre']."</option>";
                }
            } else {
                echo "<option disabled>No hay datos disponibles</option>";
            }


          ?>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Veterinario</label>
        <select name="id_veterinario" class="form-select" required>
          <option value="">Seleccione...</option>
          <?php
        
            include('../modelos/conexion.php');
            $query = "SELECT `id_veterinario`, `nombre` FROM `veterinarios`";
            $res = $conexion->query($query);
            if ($res->num_rows > 0) {
                while ($veterinarios = $res->fetch_array(MYSQLI_ASSOC)) {
                    $selected = $veterinarios['id_veterinario'] == $row['id_veterinario'] ? 'selected' : '';
                    echo "<option value='".$veterinarios['id_veterinario']."' $selected>".$veterinarios['nombre']."</option>";
                }
            } else {
                echo "<option disabled>No hay datos disponibles</option>";
            }



          ?>
        </select>
      </div>

      <button type="submit" class="btn btn-success w-100">Guardar Cambios</button>

    </form>
  </div>
</div>

</body>
</html>
