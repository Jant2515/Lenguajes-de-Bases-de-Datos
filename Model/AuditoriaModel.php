<?php

function ListarHemograma()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM MASCOTAS_EXAMENES");
  $stmt->execute();

  return $stmt;
}

function ListarGrooming()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM MASCOTAS_GROOMING");
  $stmt->execute();

  return $stmt;
}

function ListarEmpleado()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM VISTA_ENFERMEROS");
  $stmt->execute();

  return $stmt;
}

function ListarDoctor()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM ATENDIDOS_DOCS");
  $stmt->execute();

  return $stmt;
}

function ListarFacturasE()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM FACTURACION");
  $stmt->execute();

  return $stmt;
}

function ListarFacturaAlta()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM FACTURASALTAS");
  $stmt->execute();

  return $stmt;
}

function ListarAuCitas()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM AUDITORIACITA");
  $stmt->execute();

  return $stmt;
}

?>