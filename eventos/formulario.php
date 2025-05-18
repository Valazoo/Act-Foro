
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Formulario con imagen a la derecha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
        /* Fondo de la pagina */
        body {
            background: linear-gradient(135deg,rgb(214, 214, 214),rgb(255, 218, 153));
            min-height: 100vh;
        }
        /* Fondo del cuadro de formulario */
        .card {
            background-color:rgb(120, 171, 221); /* gris claro */
            border: none;
        }
    </style>
</head>

<br><br>
<body>
  <div class="container-fluid full-height">
    <div class="row full-height">
      <!--Formulario -->
      <div class="col-md-6 d-flex align-items-center justify-content-center px-4">
        <div class="card shadow w-75" style="background-color: #f8f9fa; padding: 2rem;">
          <h3 class="card-title mb-4 text-primary">Formulario de Registro de Vehiculos</h3>
          <form action="procesar.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Cédula:</label>
              <input type="number" name="cedula" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Nombre:</label>
              <input type="text" name="nombre" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Correo:</label>
              <input type="email" name="correo" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Modelo Vehículo:</label>
              <input type="text" name="modelo_carro" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Color Vehículo:</label>
              <input type="text" name="color_carro" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Placa Vehículo:</label>
              <input type="text" name="placa_carro" class="form-control" required />
            </div>

            <button type="submit" class="btn btn-success">Inscribirse</button>  
          </form>
          <a href="listar.php" class="btn btn-link">Ver inscritos</a>
        </div>
      </div>

      <!-- Diseño de imagen -->
      <div class="col-md-6 d-md-flex align-items-center ">
        <img src="imagen.jpg" alt="Imagen decorativa"  
        class="img-fluid border border-4 border-secundary rounded-5" 
        style="height: auto; object-fit: contain;"> 
      </div>
    </div>
  </div>
</body>
<br><br>
</html>
