<?php
include('../modelos/conexion.php');

$fecha = $_POST['fecha'];
$motivo = $_POST['motivo'];
$tratamiento = $_POST['tratamiento'];
$id_mascota = $_POST['id_mascota'];
$id_veterinario = $_POST['id_veterinario'];

$query = "INSERT INTO consultas (fecha, motivo, tratamiento, id_mascota, id_veterinario)
        VALUES ('$fecha', '$motivo', '$tratamiento', '$id_mascota', '$id_veterinario')";


$res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaConsultas.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }
?>
