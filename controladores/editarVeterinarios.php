<?php
include('../modelos/conexion.php'); 

// Obtener el ID del veterinario a actualizar
$id = $_REQUEST['ide'];

// Obtener los nuevos datos desde el formulario
$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$telefono = $_POST['telefono'];

// Preparar y ejecutar la consulta de actualización
$query = "UPDATE veterinarios SET 
            nombre = '$nombre', 
            especialidad = '$especialidad', 
            telefono = '$telefono' 
          WHERE id_veterinario = '$id'";

$res = $conexion->query($query);

// Verificar si la actualización fue exitosa
if ($res) {
    header("location:../vistas/listaVeterinarios.php");
} else {
    echo "Error al actualizar el veterinario.";
}
?>
