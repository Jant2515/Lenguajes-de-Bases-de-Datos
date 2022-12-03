<?php

function ListarDetalle()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM DETALLEFACTURA");
  $stmt->execute();

  return $stmt;
}

function AgregarServiciosModel($NombreServicio, $DescipcionServicio, $PrecioServicio)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();

    $stmt = $getConection->prepare("EXECUDE INSERTAR_SERVICIOS('$NombreServicio', '$DescipcionServicio', '$PrecioServicio')");
    $stmt->execute();

    return $stmt;

}

function EditarServiciosModel($IDServicio, $NombreServicio, $DescipcionServicio, $PrecioServicio)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();

    $stmt = $getConection->prepare("EXECUDE EDITAR_SERVICIO('$IDServicio', '$NombreServicio', '$DescipcionServicio', '$PrecioServicio')");
    $stmt->execute();

    return $stmt;
}
?>