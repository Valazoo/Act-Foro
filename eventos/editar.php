<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, rgb(214, 214, 214), rgb(149, 225, 255));
      min-height: 100vh;
    }
    .card {
      background-color: rgb(120, 171, 221);
      border: none;
    }
  </style>
</head>
<body>
<?php
require 'conexion.php';

if (isset($_GET['cedula'])) {
  $cedula = $_GET['cedula'];
  $consulta = $conexion->prepare("SELECT cedula, nombre, correo, modelo_carro, color_carro, placa_carro FROM clientes WHERE cedula = ?");
  $consulta->bind_param("i", $cedula);
  $consulta->execute();
  $consulta->bind_result($cedula, $nombre, $correo, $modelo_carro, $color_carro, $placa_carro);
  $consulta->fetch();
  $consulta->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $modelo_carro = $_POST['modelo_carro'];
  $color_carro = $_POST['color_carro'];
  $placa_carro = $_POST['placa_carro'];

  $consulta = $conexion->prepare("UPDATE clientes SET nombre = ?, correo = ?, modelo_carro = ?, color_carro = ?, placa_carro = ? WHERE cedula = ?");
  $consulta->bind_param("ssssss", $nombre, $correo, $modelo_carro, $color_carro, $placa_carro, $cedula);
  $consulta->execute();
  header("Location: listar.php");
  exit();
}

if (!isset($nombre)) $nombre = "";
if (!isset($correo)) $correo = "";
if (!isset($modelo_carro)) $modelo_carro = "";
if (!isset($color_carro)) $color_carro = "";
if (!isset($placa_carro)) $placa_carro = "";
if (!isset($cedula)) $cedula = "";
?>

<div class="container-fluid full-height">
  <div class="row full-height">
    <!-- Formulario -->
    <div class="col-md-6 d-flex align-items-center justify-content-center px-4">
      <div class="card shadow w-75" style="background-color: #f8f9fa; padding: 2rem;">
        <h3 class="card-title mb-4 text-primary">Editar Registro de Vehiculo</h3>
        <form method="POST">
          <input type="hidden" name="cedula" value="<?= htmlspecialchars($cedula) ?>">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($nombre) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="email" name="correo" class="form-control" value="<?= htmlspecialchars($correo) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Modelo Vehículo:</label>
            <input type="text" name="modelo_carro" class="form-control" value="<?= htmlspecialchars($modelo_carro) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Color Vehículo:</label>
            <input type="text" name="color_carro" class="form-control" value="<?= htmlspecialchars($color_carro) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Placa Vehículo:</label>
            <input type="text" name="placa_carro" class="form-control" value="<?= htmlspecialchars($placa_carro) ?>" required>
          </div>
          <button type="submit" class="btn btn-success">Actualizar</button>
          <a href="listar.php" class="btn btn-link">Ver inscritos</a>
        </form>
      </div>
    </div>

    <!-- Imagen a la derecha -->
    <div class="col-md-6 d-md-flex align-items-center justify-content-center">
      <img src="imagen.jpg" alt="Imagen decorativa" 
           class="img-fluid border border-4 border-secondary rounded-5"
           style="max-width: 90%; max-height: 90vh; object-fit: contain;">
    </div>
  </div>
</div>
</body>
</html>