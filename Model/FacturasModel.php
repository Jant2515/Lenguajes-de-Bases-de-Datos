<?php

function ListarFactura()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM FACTURA");
  $stmt->execute();

  return $stmt;
}
function AgregarFacturaModel($NombreVetFact, $TelVetFact, $NombreCliFact, $NombreMascFact, $SubtotalFact)
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();
  $sentencia = $getConection->prepare("BEGIN INSERTAR_FACTURA(:VNOMBRE_VET_FACT, :VTELEFONO_VET_FACT, :VNOMBRE_CLIENTE_FACT, :VNOMBRE_MASCOTA_FACT, :VSUBTOTAL_FACT); END;");
  $sentencia->bindParam(':VNOMBRE_VET_FACT',$NombreVetFact);
  $sentencia->bindParam(':VTELEFONO_VET_FACT',$TelVetFact);
  $sentencia->bindParam(':VNOMBRE_CLIENTE_FACT',$NombreCliFact);
  $sentencia->bindParam(':VNOMBRE_MASCOTA_FACT',$NombreMascFact);
  $sentencia->bindParam(':VSUBTOTAL_FACT',$SubtotalFact);
  $sentencia->execute();

  return $sentencia;

}

function EditarFacturaModel($IDFactura, $FechaFact, $NombreVetFact, $TelVetFact, $NombreCliFact, $NombreMascFact, $SubtotalFact)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAR_FACTURA(:VIDFACTURA, :VFECHA_FACT, :VNOMBRE_VET_FACT, :VTELEFONO_VET_FACT, :VNOMBRE_CLIENTE_FACT, :VNOMBRE_MASCOTA_FACT, :VSUBTOTAL_FACT); END;");
    $sentencia->bindParam(':VIDFACTURA',$IDFactura);
    $sentencia->bindParam(':VFECHA_FACT',$FechaFact);
    $sentencia->bindParam(':VNOMBRE_VET_FACT',$NombreVetFact);
    $sentencia->bindParam(':VTELEFONO_VET_FACT',$TelVetFact);
    $sentencia->bindParam(':VNOMBRE_CLIENTE_FACT',$NombreCliFact);
    $sentencia->bindParam(':VNOMBRE_MASCOTA_FACT',$NombreMascFact);
    $sentencia->bindParam(':VSUBTOTAL_FACT',$SubtotalFact);
    $sentencia->execute();

    return $sentencia;
}
?>