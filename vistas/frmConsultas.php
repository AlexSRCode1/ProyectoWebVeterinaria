<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Consulta</title>

   <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>

  
</head>
<body>
<div class="container mt-5">
  <h2>Registrar Consulta</h2>
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
  <br>
  <br>
</div>
</body>
</html>
