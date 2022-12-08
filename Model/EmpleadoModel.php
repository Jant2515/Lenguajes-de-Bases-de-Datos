<?php

function ListarEmpleado()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT*FROM VISTA_EMPLEADOS");
  $stmt->execute();

  return $stmt;
}

function AgregarEmpleadoModel($NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp, $idProvincia, $idCanton, $idDistrito)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAREMPLEADO(:VNOMBREEMP, :VAPELLIDOEMP, :VTELEFONOEMP, :VCEDULAEMP, :VEMAILEMP, :VPUESTOEMP, :VSALARIOEMP, :VIDPROVINCIA, :VIDCANTON, :VIDDISTRITO); END;");
    $sentencia->bindParam(':VNOMBREEMP',$NombreEmp);
    $sentencia->bindParam(':VAPELLIDOEMP',$ApellidoEmp);
    $sentencia->bindParam(':VTELEFONOEMP',$TelefonoEmp);
    $sentencia->bindParam(':VCEDULAEMP',$CedulaEmp);
    $sentencia->bindParam(':VEMAILEMP',$EmailEmp);
    $sentencia->bindParam(':VPUESTOEMP',$PuestoEmp);
    $sentencia->bindParam(':VSALARIOEMP',$SalarioEmp);
    $sentencia->bindParam(':VIDPROVINCIA',$idProvincia);
    $sentencia->bindParam(':VIDCANTON',$idCanton);
    $sentencia->bindParam(':VIDDISTRITO',$idDistrito);
    $sentencia->execute();

    return $sentencia;
}

function EditarEmpleadoModel($IdEmp, $NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN Editarempleado(:VID ,:VNOMBREEMP, :VAPELLIDOEMP, :VTELEFONOEMP, :VCEDULAEMP, :VEMAILEMP, :VPUESTOEMP, :VSALARIOEMP); END;");
    $sentencia->bindParam(':VID',$IdEmp);
    $sentencia->bindParam(':VNOMBREEMP',$NombreEmp);
    $sentencia->bindParam(':VAPELLIDOEMP',$ApellidoEmp);
    $sentencia->bindParam(':VTELEFONOEMP',$TelefonoEmp);
    $sentencia->bindParam(':VCEDULAEMP',$CedulaEmp);
    $sentencia->bindParam(':VEMAILEMP',$EmailEmp);
    $sentencia->bindParam(':VPUESTOEMP',$PuestoEmp);
    $sentencia->bindParam(':VSALARIOEMP',$SalarioEmp);
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