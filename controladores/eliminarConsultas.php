<?php
include('../modelos/conexion.php');

$id= $_REQUEST['ide'];


$query="DELETE FROM `consultas` WHERE id_consulta='$id'";

$res=$conexion->query($query);

if($res){
    header("location:../vistas/listaConsultas.php");
}else{
    echo "no se pudo eliminar";
}

?>