<?php

function ListarMascota()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM  MASCOTASyDUENOS");
  $stmt->execute();

  return $stmt;
}

function AgregarMascotaModel($NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas, $IdCliente)
{
    require_once('ConnBD.php');$conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAR_MASCOTA(:VNOMBRE_MASC, :VRAZA_MASC, :VEDAD_MASC, :VPESO_MASC, :VTALLA_MASC, :VGENERO_MASC, :VESTERELIZADO_MASC, :VPEDIGREE_MASC, :VIDCLIENTE); END;");
    $sentencia->bindParam(':VNOMBRE_MASC',$NomMas);
    $sentencia->bindParam(':VRAZA_MASC',$RazaMas);
    $sentencia->bindParam(':VEDAD_MASC',$EdadMas);
    $sentencia->bindParam(':VPESO_MASC',$PesoMas);
    $sentencia->bindParam(':VTALLA_MASC',$TallaMas);
    $sentencia->bindParam(':VGENERO_MASC',$GeneroMas);
    $sentencia->bindParam(':VESTERELIZADO_MASC',$EsterilizadoMas);
    $sentencia->bindParam(':VPEDIGREE_MASC',$PedigreeMas);
    $sentencia->bindParam(':VIDCLIENTE',$IdCliente);
    $sentencia->execute();

    return $sentencia;
}

function EditarMascotaModel($IDMas, $NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN EDITAR_MASCOTA(:VIDMASCOTA, :VNOMBRE_MASC, :VRAZA_MASC, :VEDAD_MASC, :VPESO_MASC, :VTALLA_MASC, :VGENERO_MASC, :VESTERELIZADO_MASC, :VPEDIGREE_MASC); END;");
    $sentencia->bindParam(':VIDMASCOTA ',$IDMas);
    $sentencia->bindParam(':VNOMBRE_MASC',$NomMas);
    $sentencia->bindParam(':VRAZA_MASC',$RazaMas);
    $sentencia->bindParam(':VEDAD_MASC',$EdadMas);
    $sentencia->bindParam(':VPESO_MASC',$PesoMas);
    $sentencia->bindParam(':VTALLA_MASC',$TallaMas);
    $sentencia->bindParam(':VGENERO_MASC',$GeneroMas);
    $sentencia->bindParam(':VESTERELIZADO_MASC',$EsterilizadoMas);
    $sentencia->bindParam(':VPEDIGREE_MASC',$PedigreeMas);
    $sentencia->execute();

    return $sentencia;
}


?>