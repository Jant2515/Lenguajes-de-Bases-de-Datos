<?php

function ListarCliente()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT *FROM VISTA_CLIENTE");
  $stmt->execute();

  return $stmt;
}

function AgregarClienteModel($NombreCli, $ApellidoCli, $TelefonoCli, $EmailCli, $CedulaCli, $ProvinciaCli, $CantonCli, $DistritoCli)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAR_CLIENTE(:VNOMBRECLIENTE, :VAPELLIDOCLIENTE, :VTELEFONOCLIENTE, :VEMAILCLIENTE, :VCEDULA, :VIDPROVINCIA, :VIDCANTON, :VIDDISTRITO); END;");
    $sentencia->bindParam(':VNOMBRECLIENTE',$NombreCli);
    $sentencia->bindParam(':VAPELLIDOCLIENTE',$ApellidoCli);
    $sentencia->bindParam(':VTELEFONOCLIENTE',$TelefonoCli);
    $sentencia->bindParam(':VEMAILCLIENTE',$EmailCli);
    $sentencia->bindParam(':VCEDULA',$CedulaCli);
    $sentencia->bindParam(':VIDPROVINCIA',$ProvinciaCli);
    $sentencia->bindParam(':VIDCANTON',$CantonCli);
    $sentencia->bindParam(':VIDDISTRITO',$DistritoCli);
    $sentencia->execute();

    return $sentencia;
}
//funcion para traer los datos de las provincias
function ListarProvinciaModel()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM PROVINCIA");
  $stmt->execute();
  return $stmt;
}
//funcion para traer los datos de los cantones
function ListarCantonModel()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM CANTON");
  $stmt->execute();
  return $stmt;

}
//funcion para traer los datos de los distritos
function ListarDistritoModel()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM DISTRITO");
  $stmt->execute();
  return $stmt;

}

?>