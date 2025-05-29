<?php
include('../modelos/conexion.php'); 

// Obtener el ID de la consulta a actualizar
$id = $_REQUEST['ide'];

// Obtener los nuevos datos desde el formulario
$fecha = $_POST['fecha'];
$motivo = $_POST['motivo'];
$tratamiento = $_POST['tratamiento'];
$id_mascota = $_POST['id_mascota'];
$id_veterinario = $_POST['id_veterinario'];

// Preparar y ejecutar la consulta de actualización
$query = "UPDATE consultas SET 
            fecha = '$fecha', 
            motivo = '$motivo', 
            tratamiento = '$tratamiento', 
            id_mascota = '$id_mascota', 
            id_veterinario = '$id_veterinario' 
          WHERE id_consulta = '$id'";

$res = $conexion->query($query);

// Verificar si la actualización fue exitosa
if ($res) {
    header("location:../vistas/listaConsultas.php");
} else {
    echo "Error al actualizar la consulta.";
}
?>
