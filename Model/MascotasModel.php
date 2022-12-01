<?php

function ListarCitas()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT * FROM VISTA_CITAS");
  $stmt->execute();

  return $stmt;
}
//REVISAR ESTOS PROCEDIMIENTOS 
function AgregarCitasModel($ServicioCita, $FechaCita, $HoraCita, $TelCita, $MascotaCita)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();

    $stmt = $getConection->prepare("EXECUDE INSERTAR_CITA('$ServicioCita', '$FechaCita', '$HoraCita', '$TelCita', '$MascotaCita')");
    $stmt->execute();

    return $stmt;
}

function EditarCitasModel($IDCita, $ServicioCita, $FechaCita, $HoraCita, $TelCita, $MascotaCita)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();

    $stmt = $getConection->prepare("EXECUDE EDITAR_CITA('$IDCita', '$ServicioCita', '$FechaCita', '$HoraCita', '$TelCita', '$MascotaCita')");
    $stmt->execute();

    return $stmt;
}

//FALATA ENVIAR PARAMETROS BIEN 
/*function ActualizarCitasModel($Nombre,$Contrasenna,$Correo,$TipoUsuario,$Id)
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

    $procedimiento = "call ActualizarUsuario('$Nombre','$Contrasenna','$Correo',$TipoUsuario,$Id);";
    $enlace -> query($procedimiento);

    $stmt->execute();
}*/

function ListarMascota()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT *FROM MASCOTASyDUEÑOS");
  $stmt->execute();

  return $stmt;
}

function ListarCliente()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT *FROM CLIENTES");
  $stmt->execute();

  return $stmt;
}

function ListarEmpleado()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT*FROM VISTA_EMPLEADOS");
  $stmt->execute();

  return $stmt;
}

?>