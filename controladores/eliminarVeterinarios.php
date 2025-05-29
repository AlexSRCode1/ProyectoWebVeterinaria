<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];


$query="DELETE FROM `veterinarios` WHERE id_veterinario='$id'";

$res=$conexion->query($query);

if($res){
    header("location:../vistas/listaVeterinarios.php");
}else{
    echo "no se pudo eliminar";
}

?>