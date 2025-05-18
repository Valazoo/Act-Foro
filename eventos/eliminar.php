<?php
require 'conexion.php';
//Elimina usuario
if (isset($GET['cedula']));{
    $cedula = $_GET['cedula'];

    $consulta =$conexion->prepare("DELETE FROM clientes WHERE cedula = ?");
    $consulta->bind_param("i", $cedula);
    $consulta->execute();
}

header("Location: listar.php");
?>