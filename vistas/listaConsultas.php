<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Consultas</title>

  <?php include "menu.php"; ?>


</head>

<body>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Lista de Consultas</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar Consulta
    </button>
  </div>

  <div class="table-responsive shadow rounded">
    <table id="tablaConsultas" class="table table-bordered table-striped table-hover text-center">

      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Fecha</th>
          <th>Motivo</th>
          <th>Tratamiento</th>
          <th>ID Mascota</th>
          <th>Mascota</th>
          <th>ID Veterinario</th>
          <th>Veterinario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include('../modelos/conexion.php');

        $query = "SELECT 
                    consultas.id_consulta, 
                    consultas.fecha, 
                    consultas.motivo, 
                    consultas.tratamiento, 
                    mascotas.id_mascota, 
                    mascotas.nombre AS nombre_mascota, 
                    veterinarios.id_veterinario, 
                    veterinarios.nombre AS nombre_veterinario
                  FROM consultas
                  INNER JOIN mascotas ON consultas.id_mascota = mascotas.id_mascota
                  INNER JOIN veterinarios ON consultas.id_veterinario = veterinarios.id_veterinario";

        $res = $conexion->query($query);

        while($row = $res->fetch_assoc()) {

                 ?>
                <tr>
                    <td><?php echo $row['id_consulta'] ?> </td>
                    <td><?php echo $row['fecha'] ?> </td>
                    <td><?php echo $row['motivo'] ?> </td>
                    <td><?php echo $row['tratamiento'] ?></td>
                    <td><?php echo $row['id_mascota'] ?></td>
                    <td><?php echo $row['nombre_mascota'] ?></td>
                    <td><?php echo $row['id_veterinario'] ?></td>
                    <td><?php echo $row['nombre_veterinario'] ?></td>
                    <td class="text-center">
                        <!-- Botones opcionales -->
                    
                    <div class="d-flex justify-content-center gap-2">
                      <a href="../controladores/eliminarConsultas.php?ide=<?php echo $row['id_consulta'];?>" 
                        class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Eliminar">
                        <i class="bi bi-trash"> Eliminar</i> 
                      </a>
                      <a href="../vistas/editarFrmConsultas.php?ide=<?php echo $row['id_consulta'];?>" 
                        class="btn btn-success btn-sm" data-bs-toggle="tooltip" title="Editar">
                        <i class="bi bi-pencil"> Editar</i>
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar Consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

       <form action="../controladores/crearConsultas.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Fecha</label>
      <input type="date" name="fecha" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Motivo</label>
      <textarea name="motivo" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Tratamiento</label>
      <textarea name="tratamiento" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Mascota</label>
      <select name="id_mascota" class="form-select">
        <option value="">Seleccione...</option>
                        <?php
                            include('../modelos/conexion.php'); 

                            $query="SELECT `id_mascota`, `nombre` FROM `mascotas`";
                            $res=$conexion->query($query);

                            if($res->num_rows>0){

                                $combobit="";
                                while($row=$res->fetch_array(MYSQLI_ASSOC))
                                {
                                    $combobit = "<option value='".$row['id_mascota']."'>".$row['nombre']."</option>";

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
    <div class="mb-3">
      <label class="form-label">Veterinario</label>
      <select name="id_veterinario" class="form-select">
        <option value="">Seleccione...</option>
                
                        <?php

                            include('../modelos/conexion.php'); 

                            $query="SELECT `id_veterinario`, `nombre` FROM `veterinarios`";
                            $res=$conexion->query($query);

                            if($res->num_rows>0){

                                $combobit="";
                                while($row=$res->fetch_array(MYSQLI_ASSOC))
                                {
                                    $combobit = "<option value='".$row['id_veterinario']."'>".$row['nombre']."</option>";

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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
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
