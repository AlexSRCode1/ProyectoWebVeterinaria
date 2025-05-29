<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Veterinario</title>
    <?php include "menu.php"; ?>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="">
            <?php
            $id = $_REQUEST['ide'];
            include('../modelos/conexion.php');

            $query = "SELECT * FROM veterinarios WHERE id_veterinario='$id'";
            $res = $conexion->query($query);
            $row = $res->fetch_assoc();
            ?>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9">
                        <form method="POST" action="../controladores/editarVeterinarios.php?ide=<?php echo $row['id_veterinario']; ?>">
                            <div class="card shadow-lg p-5 border-0">
                                <h3 class="text-center mb-4">Editar Veterinario</h3>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="especialidad" class="form-label">Especialidad:</label>
                                        <input type="text" id="especialidad" name="especialidad" value="<?php echo htmlspecialchars($row['especialidad']); ?>" class="form-control" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono:</label>
                                    <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($row['telefono']); ?>" class="form-control" required>
                                </div>

                                <button class="btn btn-success w-100" type="submit">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
