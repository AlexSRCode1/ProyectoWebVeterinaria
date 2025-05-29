<?php
include('../modelos/conexion.php');

$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$id_cliente = $_POST['id_cliente'];

$query  = "INSERT INTO mascotas (nombre, especie, raza, edad, id_cliente)
        VALUES ('$nombre', '$especie', '$raza', '$edad', '$id_cliente')";

$res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaMascotas.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }
?>
