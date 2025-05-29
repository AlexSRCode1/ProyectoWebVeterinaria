<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Mascota</title>
    <?php include "menu.php"; ?>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">

            <?php
            include('../modelos/conexion.php');

            $id = $_REQUEST['ide'];
            $query = "SELECT * FROM mascotas WHERE id_mascota = '$id'";
            $res = $conexion->query($query);
            $mascota = $res->fetch_assoc();
            ?>

            <form method="POST" action="../controladores/editarMascotas.php?ide=<?php echo $mascota['id_mascota']; ?>">
                <div class="card shadow-lg p-4 border-0">
                    <h3 class="text-center mb-4">Editar Mascota</h3>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($mascota['nombre']); ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="especie" class="form-label">Especie</label>
                        <input type="text" id="especie" name="especie" value="<?php echo htmlspecialchars($mascota['especie']); ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="raza" class="form-label">Raza</label>
                        <input type="text" id="raza" name="raza" value="<?php echo htmlspecialchars($mascota['raza']); ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" id="edad" name="edad" value="<?php echo htmlspecialchars($mascota['edad']); ?>" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="id_cliente" class="form-label">Cliente</label>
                        <select id="id_cliente" name="id_cliente" class="form-select" required>
                            <option value="">Seleccione...</option>
                            <?php
                            $clientes = $conexion->query("SELECT id_cliente, nombre FROM clientes");
                            if ($clientes->num_rows > 0) {
                                while ($cliente = $clientes->fetch_assoc()) {
                                    $selected = $cliente['id_cliente'] == $mascota['id_cliente'] ? "selected" : "";
                                    echo "<option value='{$cliente['id_cliente']}' $selected>" . htmlspecialchars($cliente['nombre']) . "</option>";
                                }
                            } else {
                                echo '<option disabled>No hay clientes disponibles</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <button class="btn btn-success w-100" type="submit">Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>
