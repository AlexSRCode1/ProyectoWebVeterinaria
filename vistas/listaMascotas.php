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
    <h3> Lista de Mascotas</h3>   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Mascotas
</button>

<div class="table-responsive shadow rounded">
  <table id="tablaConsultas" class="table table-bordered table-striped table-hover text-center">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Edad</th>
        <th>ID Cliente</th>
        <th>Nombre Cliente</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('../modelos/conexion.php');

        $query = "SELECT 
                    mascotas.id_mascota, 
                    mascotas.nombre, 
                    mascotas.especie, 
                    mascotas.raza, 
                    mascotas.edad, 
                    mascotas.id_cliente, 
                    clientes.nombre AS nombre_cliente
                  FROM mascotas
                  INNER JOIN clientes ON mascotas.id_cliente = clientes.id_cliente";

        $res = $conexion->query($query);

        while($row = $res->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $row['id_mascota']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['especie']; ?></td>
          <td><?php echo $row['raza']; ?></td>
          <td><?php echo $row['edad']; ?></td>
          <td><?php echo $row['id_cliente']; ?></td>
          <td><?php echo $row['nombre_cliente']; ?></td>
          <td>
            <div class="d-flex justify-content-center gap-2">
              <a href="../controladores/eliminarMascotas.php?ide=<?php echo $row['id_mascota']; ?>" 
                class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Eliminar">
                <i class="bi bi-trash"></i> Eliminar
              </a>
              <a href="../vistas/editarFrmMascotas.php?ide=<?php echo $row['id_mascota']; ?>" 
                class="btn btn-success btn-sm" data-bs-toggle="tooltip" title="Editar">
                <i class="bi bi-pencil"></i> Editar
              </a>
            </div>
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
              
            <form action="../controladores/crearMascotas.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Especie</label>
      <input type="text" name="especie" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Raza</label>
      <input type="text" name="raza" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Edad</label>
      <input type="text" name="edad" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Cliente</label>
      <select name="id_cliente" class="form-select" id="id_cliente">
       <option value="">Seleccione...</option>
                     
                        <?php

                            include('../modelos/conexion.php'); 

                            $query="SELECT `id_cliente`, `nombre` FROM `clientes`";
                            $res=$conexion->query($query);

                            if($res->num_rows>0){

                                $combobit="";
                                while($row=$res->fetch_array(MYSQLI_ASSOC))
                                {
                                    $combobit = "<option value='".$row['id_cliente']."'>".$row['nombre']."</option>";

                                    echo $combobit;
                                }
                                
                            }
                            else
                            {
                                echo "No hay ningun dato para mostrar";
                            }

                            
                        ?>
                    
      </select>
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
<script>
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
    new bootstrap.Tooltip(el)
  })
</script>
</body>
</html>