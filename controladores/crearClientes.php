<?php
include('../modelos/conexion.php');

$id = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$query = "INSERT INTO clientes (id_cliente, nombre, telefono, correo) VALUES ('$id', '$nombre', '$telefono', '$correo')";


$res = $conexion->query($query);

    // Verificar si la inserción fue exitosa
    if ($res) {
//Redireccionando a la vista
        header("location:../vistas/listaClientes.php");

        // echo "Producto registrado exitosamente.";
    } else {
        echo "Error al registrar el producto: ";
    }
?>
