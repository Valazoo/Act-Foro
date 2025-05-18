<?php
session_start();           // Inicia la sesión
session_unset();           // Limpia las variables de sesión
session_destroy();         // Destruye la sesión
header("Location: formulario.php"); // Redirige al inicio (ajusta si usas otra ruta)
exit();
?>