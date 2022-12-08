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
    echo '</tr>';
  }
}
if(isset($_POST["agregarEmp"]))
{
    $NombreVetFact= $_POST["Veterinaria"];
    $TelVetFact = $_POST["Telefono"];
    $NombreCliFact = $_POST["NomCliente"];
    $NombreMascFact= $_POST["NomMascota"];
    $SubtotalFact = $_POST["Subtotal"];
    AgregarFacturaModel($NombreVetFact, $TelVetFact, $NombreCliFact, $NombreMascFact, $SubtotalFact);
    header("Location: Factura.php");
}

if(isset($_POST["btnConfirmar"]))
{
  $IDFactura = $_POST["idFact"];
  $FechaFact = $_POST["nombreServicio"];
  $NombreVetFact= $_POST["txtVeterinaria"];
  $TelVetFact = $_POST["txtTelefono"];
  $NombreCliFact = $_POST["txtNomCliente"];
  $NombreMascFact= $_POST["txtNomMascota"];
  $SubtotalFact = $_POST["txtSubtotal"];
    EditarFacturaModel($IDFactura, $FechaFact, $NombreVetFact, $TelVetFact, $NombreCliFact, $NombreMascFact, $SubtotalFact);
    header("Location: Factura.php");
}
?>