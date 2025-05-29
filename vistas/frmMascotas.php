<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Mascota</title>

   <?php
    // require_once"referencias.php";
    include "menu.php";
    ?>

  
</head>
<body>
<div class="container mt-5">
  <h2>Registrar Mascota</h2>
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
<br>
</body>
</html>
