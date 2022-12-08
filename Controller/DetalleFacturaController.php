<?php
include_once __DIR__ . '\..\Model\DetalleFacturaModel.php';
function DetalleLista()
{
  $stmt = ListarDetalle();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["fecha_det"] . '</td>';
    echo '<td>' . $row["nombre_vet_det"] . '</td>';
    echo '<td>' . $row["telefono_vet_det"] . '</td>';
    echo '<td>' . $row["nombre_cliente_det"] . '</td>';
    echo '<td>' . $row["nombre_mascota_det"] . '</td>';
    echo '<td>' . $row["descripcion_det"] . '</td>'; 
    echo '<td>' . $row["subtotal_det"] . '</td>'; 
    echo '<td>' . $row["descuento_det"] . '</td>'; 
    echo '<td>' . $row["iva_det"] . '</td>'; 
    echo '<td>' . $row["total_det"] . '</td>'; 
    echo '<td><a type="button" href="EditarFactura.php?q='.$row['iddetalle_factura'].'" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}
if(isset($_POST["btnGuardar"]))
{
  $NumLineaDet = $_POST[""];
  $FechaDet= $_POST[""];
  $NombreVetDet = $_POST["txtVeterinaria"];
  $TelVetDet = $_POST["txtTelefono"];
  $NombreCliDet = $_POST["txtNomCliente"];
  $NombreMascDet= $_POST["txtNomMascota"];
  $DescripcionDet = $_POST["txtDescripcion"];
  $SubtotalDet = $_POST["txtSubtotal"];
  $DescuentoDet = $_POST["txtDescuento"]; 
  $IvaDet = $_POST["txtIva"];
  $TotalDet = $_POST["txtTotal"];
    AgregarDetalleModel($NumLineaDet, $FechaDet, $NombreVetDet, $TelVetDet, $NombreCliDet, $NombreMascDet, $DescripcionDet, $SubtotalDet,  $DescuentoDet, $IvaDet, $TotalDet);
    header("Location: DetalleFactura.php");
}
if(isset($_POST["btnEditar"]))
{
  $IDdetalle = $_POST["idDet"];
  $NumLineaDet = $_POST[""];
  $FechaDet= $_POST[""];
  $NombreVetDet = $_POST["txtVeterinaria"];
  $TelVetDet = $_POST["txtTelefono"];
  $NombreCliDet = $_POST["txtNomCliente"];
  $NombreMascDet= $_POST["txtNomMascota"];
  $DescripcionDet = $_POST["txtDescripcion"];
  $SubtotalDet = $_POST["txtSubtotal"];
  $DescuentoDet = $_POST["txtDescuento"]; 
  $IvaDet = $_POST["txtIva"];
  $TotalDet = $_POST["txtTotal"];
    EditarDetalleModel($IDdetalle, $NumLineaDet, $FechaDet, $NombreVetDet, $TelVetDet, $NombreCliDet, $NombreMascDet, $DescripcionDet, $SubtotalDet,  $DescuentoDet, $IvaDet, $TotalDet);
    header("Location: DetalleFactura.php");
}
?>