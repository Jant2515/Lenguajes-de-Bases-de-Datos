<?php

include_once __DIR__ . '\..\Model\CitasModel.php';

function Citalista()
{
  $stmt = ListarCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcita"] . '</td>';
    echo '<td>' . $row["servicio_cita"] . '</td>';
    echo '<td>' . $row["fecha_cita"] . '</td>';
    echo '<td>' . $row["hora_cita"] . '</td>';
    echo '<td>' . $row["telefono_cita"] . '</td>';
    echo '<td>' . $row["nombre mascota"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php?id='. $row['idcita']. '" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" href="EliminarCita.php?id='. $row['idcita']. '"class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarCita"]))
{
  $ServicioCita = $_POST["serviciocita"];
  $FechaCita= $_POST["fechacita"];
  $HoraCita = $_POST["horacita"];
  $TelCita = $_POST["telcita"];
  $MascotaCita = $_POST["mascotacita"];

  AgregarCitasModel($ServicioCita, $FechaCita, $HoraCita, $TelCita, $MascotaCita);
  header("Location: Cita.php");
}

if(isset($_POST["editarCita"]))
{
    $idcita = $_POST["idCita"];
    $servicio_cita = $_POST["serviciocita"];
    $fecha_cita= $_POST["fechacita"];
    $hora_cita = $_POST["horacita"];
    $telefono_cita = $_POST["telcita"];
    $nombre_mascota_cita = $_POST["mascotacita"];

    EditarCitasModel($idcita, $servicio_cita, $fecha_cita, $hora_cita, $telefono_cita, $nombre_mascota_cita);
    header("Location: Cita.php");
}

?>