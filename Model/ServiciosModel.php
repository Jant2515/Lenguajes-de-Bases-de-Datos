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
    $sentencia = $getConection->prepare("BEGIN CrearCita(:VNOMSERVICIO ,:VDESCRIPCION, :VPRECIO); END;");
    $sentencia->bindParam(':VNOMSERVICIO',$NombreServicio);
    $sentencia->bindParam(':VDESCRIPCION',$DescipcionServicio);
    $sentencia->bindParam(':VPRECIO',$PrecioServicio);
    $sentencia->execute();

    return $sentencia;

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