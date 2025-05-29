<?php
include('../modelos/conexion.php');

$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO veterinarios (nombre, especialidad, telefono)
        VALUES ('$nombre', '$especialidad', '$telefono')";


$res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaVeterinarios.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }
?>
