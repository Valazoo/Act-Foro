<?php

    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['rol']))
    {
        echo "Hola, ". $_SESSION['usuario'] . ". Tu rol es: ". $_SESSION['rol'];
    }
    else
        echo "No hay sesion activa. Por favor <a href='login.php'>inicia sesion</a>.";

?>