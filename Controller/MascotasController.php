<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

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
    echo '<td><a type="button" href="EditarCita.php?id='. $row['idmascotas']. '" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarMascota"]))
{
  $NomMas = $_POST["nombre_masc"];
  $RazaMas = $_POST["raza"];
  $EdadMas = $_POST["edad"];
  $PesoMas = $_POST["peso"];
  $TallaMas = $_POST["talla"];
  $GeneroMas = $_POST["genero"];
  $EsterilizadoMas = $_POST["esterelizacion"];
  $PedigreeMas = $_POST["pedigree"];
  $IdCliente = $_POST["idclient"];

  AgregarMascotaModel($NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas, $IdCliente);
  header("Location: Mascota.php");
}

if(isset($_POST["btnConfirmar"]))
{
  $IDMas = $_POST["nombre_masc"];
  $NomMas = $_POST["nombre_masc"];
  $RazaMas = $_POST["raza"];
  $EdadMas = $_POST["edad"];
  $PesoMas = $_POST["peso"];
  $TallaMas = $_POST["talla"];
  $GeneroMas = $_POST["genero"];
  $EsterilizadoMas = $_POST["esterelizacion"];
  $PedigreeMas = $_POST["pedigree"];
  $IdCliente = $_POST["idclient"];

  EditarMascotaModel($IDMas, $NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas, $IdCliente);
  header("Location: Mascota.php");
}

?>