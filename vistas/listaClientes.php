<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>

</head>
<body>
 <div class="container">
    <h3> Lista de Clientes</h3>   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Clientes
</button>

    <div class="table-responsive shadow rounded">
    <table id="tablaConsultas" class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>



            <tbody>

            <?php
                
                include('../modelos/conexion.php');

                $query="SELECT `id_cliente`, `nombre`, `telefono`, `correo` FROM `clientes`";

                $res=$conexion->query($query);

                while($row=$res->fetch_assoc()) 
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id_cliente'] ?> </td>
                    <td><?php echo $row['nombre'] ?> </td>
                    <td><?php echo $row['telefono'] ?> </td>
                    <td><?php echo $row['correo'] ?></td>
                    <td class="text-center">

                      <a href="../controladores/eliminarClientes.php?ide= <?php echo $row['id_cliente'];?>" 
                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar" 
                        <span class="fas fa-trash">Eliminar</span>
                        </a>


                        <a href="../vistas/editarFrmClientes.php?ide= <?php echo $row['id_cliente'];?>" 
                        class="btn btn-success" data-toggle="tooltip" title="Editar" 
                        <span class="fas fa-trash">Actualizar</span>
                        </a>
                        
                        
                    </td>
                    </tr>
                <?php
                }
               
            ?>      

            
            </tbody>

        </table>
    </div>
 </div>    



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- codigo de implementacion de formulario -->
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>