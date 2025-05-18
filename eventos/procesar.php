<?php
session_start();
    //Inclusion de archivo de conexion con la base de datos
    require 'conexion.php';

    //Verificamos si el fomrulario se envio mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Obtenemos los datos enviados desde el formulario
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $modelo_carro = $_POST['modelo_carro'];
        $color_carro = $_POST['color_carro'];
        $placa_carro = $_POST['placa_carro'];

        //Preparamos una consulta SQL segura
        $consulta = $conexion->prepare("INSERT INTO clientes (cedula, nombre, correo, modelo_carro, color_carro, placa_carro) VALUES (?, ?, ?, ?, ?, ?)");

        //"issssss" indica que se envia 7 cadenas de texto
        $consulta->bind_param("isssss", $cedula, $nombre, $correo, $modelo_carro, $color_carro, $placa_carro);

        $_SESSION['cedula'] = $cedula;
        $_SESSION['nombre'] = $nombre;

        //Ejecutando la consulta
        if ($consulta->execute()){
            //Si se inserta, redirigimos al usuario a la pagina de bienvenida
            header("Location: bienvenida.php");
        }else{
            //Si hubo error, lo mostramos
            echo "Error al inscribirse: " . $consulta->error;
        }        

        //Cerramos la consulta y conexion
        $consulta->close();
        $consulta->close();
    }

?>