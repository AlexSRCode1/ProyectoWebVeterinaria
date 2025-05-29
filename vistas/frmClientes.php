<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cliente</title>

   <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>

 
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <h2 class="text-center">Formulario de Registro de Clientes</h2>
        <form method="POST" action="../controladores/crearClientes.php" class="form-group">


            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">email:</label>
                <input type="text" id="correo" name="correo" class="form-control" required>
            </div>

            
            
            

            <div class="formulario-group">    
                        <!-- <input class="btn btn-primary" value="Guardar" type="button"> -->
                        <button class="btn btn-primary w-100 name="add_prod" type="submit" action="../vistas/listaClientes"> Guardar </button>

                    </div>

        </form>
    </div>
</div>
</div>
</body>
</html>
