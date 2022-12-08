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

function AgregarServiciosModel($NombreServicio, $DescripcionServicio, $PrecioServicio)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAR_SERVICIOS(:VNOMSERVICIO ,:VDESCRIPCION, :VPRECIO); END;");
    $sentencia->bindParam(':VNOMSERVICIO',$NombreServicio);
    $sentencia->bindParam(':VDESCRIPCION',$DescripcionServicio);
    $sentencia->bindParam(':VPRECIO',$PrecioServicio);
    $sentencia->execute();

    return $sentencia;

}

function EditarServiciosModel($IDServicio, $NombreServicio, $DescripcionServicio, $PrecioServicio)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();

    $sentencia = $getConection->prepare("BEGIN EDITAR_SERVICIO(:VID, :VNOMSERVICIO ,:VDESCRIPCION, :VPRECIO); END;");
    $sentencia->bindParam(':VID',$IDServicio);
    $sentencia->bindParam(':VNOMSERVICIO',$NombreServicio);
    $sentencia->bindParam(':VDESCRIPCION',$DescripcionServicio);
    $sentencia->bindParam(':VPRECIO',$PrecioServicio);
    $sentencia->execute();
    $sentencia->execute();

    return $sentencia;
}




?>