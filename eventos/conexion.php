<?php
    //Datos de la conexion 
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "tarea_bd";

    //Crear el objeto conexion a la base de datos
    $conexion = new mysqli($host, $usuario, $contraseña, $bd);

    //Verificar error de conexion
    if ($conexion->connect_error){
        die("Conexion fallida: " . $conexion->connect_error); //error
    }
    else
        echo "exitosa";

?>