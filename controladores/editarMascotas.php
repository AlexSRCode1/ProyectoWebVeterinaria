<?php
include('../modelos/conexion.php'); 

// Obtener el ID de la mascota a actualizar
$id = $_REQUEST['ide'];

// Obtener los nuevos datos desde el formulario
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$id_cliente = $_POST['id_cliente'];

// Preparar y ejecutar la consulta de actualización
$query = "UPDATE mascotas SET 
            nombre = '$nombre', 
            especie = '$especie', 
            raza = '$raza', 
            edad = '$edad', 
            id_cliente = '$id_cliente' 
          WHERE id_mascota = '$id'";

$res = $conexion->query($query);

// Verificar si la actualización fue exitosa
if ($res) {
    header("location:../vistas/listaMascotas.php");
} else {
    echo "Error al actualizar la mascota.";
}
?>
