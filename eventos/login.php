<?php
    session_start();

    //Suponer que se inicio sesion

    $_SESSION['usuario'] = "Estiven";
    $_SESSION['rol'] = "Estudiante";

    echo "Sesion iniciada"."<br>";

    echo "<a href='bienvenida.php'>Ir a la pagina de bienvenida</a>";

?>