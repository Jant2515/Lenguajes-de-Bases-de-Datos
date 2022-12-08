<?php

include_once __DIR__ . '\..\Model\ServiciosModel.php';

function ServiciosLista()
{
  $stmt = ListarServicios();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idservicio"] . '</td>';
    echo '<td>' . $row["nombre_serv"] . '</td>';
    echo '<td>' . $row["descripcion_serv"] . '</td>';
    echo '<td>' . $row["precio_serv"] . '</td>';
    echo '<td><a type="button" href="EditarServicio.php?q='. $row['idservicio']. '"class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" href="EliminarServicio.php?q='. $row['idservicio']. '"class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarServicio"]))
{
    $NombreServicio = $_POST["nombreServicio"];
    $DescripcionServicio= $_POST["DescripcionServicio"];
    $PrecioServicio = $_POST["PrecioServicio"];

    AgregarServiciosModel($NombreServicio, $DescripcionServicio, $PrecioServicio);
    header("Location: Servicios.php");
}

if(isset($_POST["editarServicio"]))
{
    $IDServicio = $_POST["idServicio"];
    $NombreServicio = $_POST["nombreServicio"];
    $DescipcionServicio= $_POST["DescripcionServicio"];
    $PrecioServicio = $_POST["PrecioServicio"];

    EditarServiciosModel($IDServicio, $NombreServicio, $DescipcionServicio, $PrecioServicio);
    header("Location: Servicios.php");
}
?>