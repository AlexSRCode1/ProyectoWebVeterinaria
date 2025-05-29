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
    <h3> Lista de Veterinarios</h3>   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Veterinarios
</button>

    <div class="table-responsive shadow rounded">
    <table id="tablaConsultas" class="table table-bordered table-striped table-hover">
      <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
            </thead>



            <tbody>

            <?php
                
                include('../modelos/conexion.php');

                $query="SELECT `id_veterinario`, `nombre`, `especialidad`, `telefono` FROM `veterinarios`";

                $res=$conexion->query($query);

                while($row=$res->fetch_assoc()) 
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id_veterinario'] ?> </td>
                    <td><?php echo $row['nombre'] ?> </td>
                    <td><?php echo $row['especialidad'] ?> </td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td class="text-center">

                      <a href="../controladores/eliminarVeterinarios.php?ide= <?php echo $row['id_veterinario'];?>" 
                        class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar" 
                        <span class="fas fa-trash">Eliminar</span>
                        </a>


                        <a href="../vistas/editarFrmVeterinarios.php?ide= <?php echo $row['id_veterinario'];?>" 
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>