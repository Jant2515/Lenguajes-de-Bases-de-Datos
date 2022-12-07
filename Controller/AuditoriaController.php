<?php

include_once __DIR__ . '\..\Model\AuditoriaModel.php';

function HemogramaLista()
{
  $stmt = ListarHemograma();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["nombre_cliente_det"] . '</td>';
    echo '<td>' . $row["nombre_mascota_det"] . '</td>';
    echo '<td>' . $row["descripcion_det"] . '</td>';
    echo '<td>' . $row["fecha_det"] . '</td>';
    echo '</tr>';
  }
}

function GroomingLista()
{
  $stmt = ListarGrooming();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["nombre_cliente_det"] . '</td>';
    echo '<td>' . $row["nombre_mascota_det"] . '</td>';
    echo '<td>' . $row["descripcion_det"] . '</td>';
    echo '<td>' . $row["fecha_det"] . '</td>';
    echo '</tr>';
  }
}

function EmpleadoLista()
{
  $stmt = ListarEmpleado();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["nombreemp"] . '</td>';
    echo '<td>' . $row["apellidoemp"] . '</td>';
    echo '<td>' . $row["telefonoemp"] . '</td>';
    echo '<td>' . $row["cedulaemp"] . '</td>';
    echo '<td>' . $row["emailemp"] . '</td>';
    echo '<td>' . $row["puestoemp"] . '</td>';
    echo '<td>' . $row["salarioemp"] . '</td>';
    echo '</tr>';
  }
}

function DoctorLista()
{
  $stmt = ListarDoctor();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcita"] . '</td>';
    echo '<td>' . $row["nombre mascota"] . '</td>';
    echo '<td>' . $row["fecha_cita"] . '</td>';
    echo '<td>' . $row["empleado acargo"] . '</td>';
    echo '</tr>';
  }
}

function FacturaLista()
{
  $stmt = ListarFacturasE();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["fecha_fact"] . '</td>';
    echo '<td>' . $row["nombre_vet_fact"] . '</td>';
    echo '<td>' . $row["nombre_cliente_fact"] . '</td>';
    echo '<td>' . $row["nombre_mascota_fact"] . '</td>';
    echo '<td>' . $row["descripcion_det"] . '</td>';
    echo '<td>' . $row["subtotal_det"] . '</td>';
    echo '<td>' . $row["iva_det"] . '</td>';
    echo '<td>' . $row["total_det"] . '</td>';
    echo '</tr>';
  }
} 

function FacturaAltaLista()
{
  $stmt = ListarFacturaAlta();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["fecha_fact"] . '</td>';
    echo '<td>' . $row["nombre_vet_fact"] . '</td>';
    echo '<td>' . $row["telefono_vet_fact"] . '</td>';
    echo '<td>' . $row["nombre_cliente_fact"] . '</td>';
    echo '<td>' . $row["nombre_mascota_fact"] . '</td>';
    echo '<td>' . $row["subtotal_fact"] . '</td>';
    echo '<td>' . $row["iva_det"] . '</td>';
    echo '<td>' . $row["total_det"] . '</td>';
    echo '</tr>';
  }
}

function AuCitasLista()
{
  $stmt = ListarAuCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["accion"] . '</td>';
    echo '<td>' . $row["usuario"] . '</td>';
    echo '<td>' . $row["fecha"] . '</td>';
    echo '</tr>';
  }
}

?>