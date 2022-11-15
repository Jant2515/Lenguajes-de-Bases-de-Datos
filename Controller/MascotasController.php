<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

function Citalista()
{
  $stmt = ListarCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcita"] . '</td>';
    echo '<td>' . $row["servicio"] . '</td>';
    echo '<td>' . $row["fecha"] . '</td>';
    echo '<td>' . $row["hora"] . '</td>';
    echo '<td>' . $row["telefono"] . '</td>';
    echo '<td>' . $row["nombre_mascota"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

?>