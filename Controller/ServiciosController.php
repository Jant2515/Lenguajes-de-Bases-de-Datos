<?php

include_once __DIR__ . '\..\Model\ServiciosModel.php';

function ServiciosLista()
{
  $stmt = ListarServicios();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["NOMBRE_SERV"] . '</td>';
    echo '<td>' . $row["DESCRIPCION_SERV"] . '</td>';
    echo '<td>' . $row["PRECIO_SERV"] . '</td>';
    echo '<td><a type="button" href="EditarServicio.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarServicio"]))
{
    $NombreServicio = $_POST["nombreServicio"];
    $DescipcionServicio= $_POST["DescripcionServicio"];
    $PrecioServicio = $_POST["PrecioServicio"];

    AgregarServiciosModel($NombreServicio, $DescipcionServicio, $PrecioServicio);
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