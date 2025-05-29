<?php
include('../modelos/conexion.php'); 

// Obtener el ID del cliente a actualizar (por ejemplo, enviado por GET desde un botón de "editar")
$id = $_REQUEST['ide'];

// Obtener los nuevos datos desde el formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Preparar y ejecutar la consulta de actualización
$query = "UPDATE clientes SET nombre = '$nombre', telefono = '$telefono', correo = '$correo' 
          WHERE id_cliente = '$id'";

$res = $conexion->query($query);

// Verificar si la actualización fue exitosa
if ($res) {
    header("location:../vistas/listaClientes.php");
} else {
    echo "Error al actualizar el cliente.";
}
?>
