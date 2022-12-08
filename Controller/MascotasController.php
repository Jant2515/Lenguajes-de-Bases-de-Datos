<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

function Mascotalista()
{
  $stmt = ListarMascota();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idmascota"] . '</td>';
    echo '<td>' . $row["nombre_masc"] . '</td>';
    echo '<td>' . $row["edad_masc"] . '</td>';
    echo '<td>' . $row["genero_masc"] . '</td>';
    echo '<td>' . $row["esterelizado_masc"] . '</td>';
    echo '<td>' . $row["pedigree_masc"] . '</td>';
    echo '<td>' . $row["dueno"] . '</td>';
    echo '<td><a type="button" href="EditarMascota.php?id='. $row['idmascota']. '" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" href="EliminarMascota.php?id='. $row['idmascota']. '"class="btn btn-outline-danger">Eliminar</a>';
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
  $IDMas = $_POST["id_masc"];
  $NomMas = $_POST["nombre_masc"];
  $RazaMas = $_POST["raza"];
  $EdadMas = $_POST["edad"];
  $PesoMas = $_POST["peso"];
  $TallaMas = $_POST["talla"];
  $GeneroMas = $_POST["genero"];
  $EsterilizadoMas = $_POST["esterelizacion"];
  $PedigreeMas = $_POST["pedigree"];

  EditarMascotaModel($IDMas, $NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas);
  header("Location: Mascota.php");
}



?>