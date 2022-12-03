<?php

include_once __DIR__ . '\..\Model\FacturasModel.php';

function FacturaLista()
{
  $stmt = ListarFactura();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["fecha_fact"] . '</td>';
    echo '<td>' . $row["nombre_vet_fact"] . '</td>';
    echo '<td>' . $row["telefono_vet_fact"] . '</td>';
    echo '<td>' . $row["nombre_cliente_fact"] . '</td>';
    echo '<td>' . $row["nombre_mascota_fact"] . '</td>';
    echo '<td>' . $row["subtotal_fact"] . '</td>';
    echo '<td><a type="button" href="EditarFactura.php" class="btn btn-outline-secondary">Editar</a>';
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