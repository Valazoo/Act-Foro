<?php
session_start();

// Validar si hay sesión activa
if (!isset($_SESSION['cedula']) || !isset($_SESSION['nombre'])) {
    header("Location: formulario.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4 rounded bg-secondary">
        <h3 class="text-center text-white mb-4">¡Bienvenido/a, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h3>
        <h3 class="text-center text-white mb-4">Tu identificación es: <strong><?php echo htmlspecialchars($_SESSION['cedula']); ?></strong></h3>

        <div class="d-flex justify-content-center mt-4 gap-3">
            <a href="formulario.php" class="btn btn-primary">Registrar otro usuario.</a>
            <a href="listar.php" class="btn btn-dark">Ver registros.</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS (opcional, si usas componentes dinámicos) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>