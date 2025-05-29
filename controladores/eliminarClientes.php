<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];


$query="DELETE FROM `clientes` WHERE id_cliente='$id'";

$res=$conexion->query($query);

if($res){
    header("location:../vistas/listaClientes.php");
}else{
    echo "no se pudo eliminar";
}

?>