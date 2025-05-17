<?php
require 'conexion.php';
$resultado = $conexion->query("SELECT * FROM clientes");
?>

<h2>Lista de Inscritos</h2>
<a href="formulario.php">Nueva inscripcion</a>
<table border ="1" cellpadding="5">
    <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Modelo Vehiculo</th>
        <th>Color Vehiculo</th>
        <th>Placa Vehiculo</th>
        <th>Acciones</th>
    </tr>
    <?php while ($registros = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $registros['cedula'] ?></td>
            <td><?= $registros['nombre'] ?></td>
            <td><?= $registros['correo'] ?></td>
            <td><?= $registros['modelo_carro'] ?></td>
            <td><?= $registros['color_carro'] ?></td>
            <td><?= $registros['placa_carro'] ?></td>
            <td>
                <a href="editar.php?cedula=<?= $registros['cedula'] ?>">Actualizar</a> |
                <a href="eliminar.php?cedula=<?= $registros['cedula'] ?>" onlink="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>    
    
    