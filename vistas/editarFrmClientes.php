<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Cliente</title>

  <?php include "menu.php"; ?>
</head>
<body>

<?php
include('../modelos/conexion.php'); 

$id = $_REQUEST['ide'];
$query = "SELECT * FROM clientes WHERE id_cliente = '$id'";
$res = $conexion->query($query);
$row = $res->fetch_assoc();
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <h2 class="text-center">Formulario de Edición de Clientes</h2>
        <form method="POST" action="../controladores/editarClientes.php?ide=<?php echo $row['id_cliente']; ?>" class="form-group">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Email:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row['correo']; ?>" class="form-control" required>
            </div>

            <div class="formulario-group">
                <button class="btn btn-success w-100" type="submit">Guardar Cambios</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>
