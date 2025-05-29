<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];


$query="DELETE FROM `mascotas` WHERE id_mascota='$id'";

$res=$conexion->query($query);

if($res){
    header("location:../vistas/listaMascotas.php");
}else{
    echo "no se pudo eliminar";
}

?>