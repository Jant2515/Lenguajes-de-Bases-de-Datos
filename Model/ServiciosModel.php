<?php

function ListarServicios()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM VISTA_SERVICIOS");
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

function ConsultaridEmpleadosModel($idempleado)
{
  $conex = new Conexion();
  $getConection = $conex->Conectar();
  $sentencia = $getConection->prepare("SELECT *FROM empleados WHERE idempleado = pidempleado=''; END;");
  $sentencia->execute();
  return $sentencia;

}


function EliminarCita()
{
  $conex = new Conexion();
  $getConection = $conex->Conectar();
  $id1=$_GET['id'];
  $sql="Delete from cita where id = '$id1'";
  $stmt1 = $getConection->prepare($sql); 
  $stmt1->execute();
}
?>