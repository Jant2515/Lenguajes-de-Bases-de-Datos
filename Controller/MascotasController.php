<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

function Citalista()
{
  $stmt = ListarCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcita"] . '</td>';
    //echo '<td>' . $row["servicio_cita"] . '</td>';
    //echo '<td>' . $row["fecha_cita"] . '</td>';
    //echo '<td>' . $row["hora_cita"] . '</td>';
    //echo '<td>' . $row["telefono_cita"] . '</td>';
    //echo '<td>' . $row["nombre_mascota_cita"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

?>