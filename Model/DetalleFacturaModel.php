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

function AgregarDetalleModel($NumLineaDet, $NombreVetDet, $TelVetDet, $NombreCliDet, $NombreMascDet, $DescripcionDet, $SubtotalDet,  $DescuentoDet, $IvaDet, $TotalDet)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAR_DETALLE_FACTURA(:VNUMERO_LINEA_DET, :VNOMBRE_VET_DET, :VTELEFONO_VET_DET, :VNOMBRE_CLIENTE_DET, :VNOMBRE_MASCOTA_DET, :VDESCRIPCION_DET, :VSUBTOTAL_DET, :VDESCUENTO_DET, :VIVA_DET, :VTOTAL_DET); END;");
    $sentencia->bindParam(':VNUMERO_LINEA_DET',$NumLineaDet);
    $sentencia->bindParam(':VNOMBRE_VET_DET',$NombreVetDet);
    $sentencia->bindParam(':VTELEFONO_VET_DET',$TelVetDet);
    $sentencia->bindParam(':VNOMBRE_CLIENTE_DET',$NombreCliDet);
    $sentencia->bindParam(':VNOMBRE_MASCOTA_DET',$NombreMascDet);
    $sentencia->bindParam(':VDESCRIPCION_DET',$DescripcionDet);
    $sentencia->bindParam(':VSUBTOTAL_DET',$SubtotalDet);
    $sentencia->bindParam(':VDESCUENTO_DET',$DescuentoDet);
    $sentencia->bindParam(':VIVA_DET',$IvaDet);
    $sentencia->bindParam(':VTOTAL_DET',$TotalDet);
    $sentencia->execute();
    
    return $sentencia;

}

function EditarDetalleModel($IDdetalle, $NumLineaDet, $FechaDet, $NombreVetDet, $TelVetDet, $NombreCliDet, $NombreMascDet, $DescripcionDet, $SubtotalDet,  $DescuentoDet, $IvaDet, $TotalDet)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN EDITAR_DETALLE_FACTURA (:VIDDETALLE_FACTURA, :VNUMERO_LINEA_DET, :VFECHA_DET, :VNOMBRE_VET_DET, :VTELEFONO_VET_DET, :VNOMBRE_CLIENTE_DET, :VNOMBRE_MASCOTA_DET, :VDESCRIPCION_DET, :VSUBTOTAL_DET, :VDESCUENTO_DET, :VIVA_DET, :VTOTAL_DET); END;");
    $sentencia->bindParam(':VIDDETALLE_FACTURA',$IDdetalle);
    $sentencia->bindParam(':VNUMERO_LINEA_DET',$NumLineaDet);
    $sentencia->bindParam(':VFECHA_DET',$FechaDet);
    $sentencia->bindParam(':VNOMBRE_VET_DET',$NombreVetDet);
    $sentencia->bindParam(':VTELEFONO_VET_DET',$TelVetDet);
    $sentencia->bindParam(':VNOMBRE_CLIENTE_DET',$NombreCliDet);
    $sentencia->bindParam(':VNOMBRE_MASCOTA_DET',$NombreMascDet);
    $sentencia->bindParam(':VDESCRIPCION_DET',$DescripcionDet);
    $sentencia->bindParam(':VSUBTOTAL_DET',$SubtotalDet);
    $sentencia->bindParam(':VDESCUENTO_DET',$DescuentoDet);
    $sentencia->bindParam(':VIVA_DET',$IvaDet);
    $sentencia->bindParam(':VTOTAL_DET',$TotalDet);
    $sentencia->execute();

    return $sentencia;
}

function Totaldetalle($SubtotalDet,  $DescuentoDet, $IvaDet)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN TOTAL_DETFACTURA(:MONTO, :DESCUENTO, :IMPUESTO); END;");
    $sentencia->bindParam(':MONTO',$SubtotalDet);
    $sentencia->bindParam(':DESCUENTO',$DescuentoDet);
    $sentencia->bindParam(':IMPUESTO',$IvaDet);
    $sentencia->execute();

    return $sentencia;
}
?>