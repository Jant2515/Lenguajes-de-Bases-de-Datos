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
    $sentencia = $getConection->prepare("BEGIN CrearCita(:vservicio ,:vfecha, :vhora, :vtelefono, :vnombre); END;");
    $sentencia->bindParam(':vservicio',$ServicioCita);
    $sentencia->bindParam(':vfecha',$FechaCita);
    $sentencia->bindParam(':vhora',$HoraCita);
    $sentencia->bindParam(':vtelefono',$TelCita);
    $sentencia->bindParam(':vnombre',$MascotaCita);
    $sentencia->execute();

    return $sentencia;
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

  $stmt = $getConection->prepare("SELECT *FROM MASCOTASyDUENOS");
  $stmt->execute();

  return $stmt;
}

function AgregarMascotaModel($NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas, $IdCliente)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

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

function ListarEmpleado()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();

  $stmt = $getConection->prepare("SELECT*FROM VISTA_EMPLEADOS");
  $stmt->execute();

  return $stmt;
}

function AgregarEmpleadoModel($NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN INSERTAREMPLEADO(:VNOMBREEMP, :VAPELLIDOEMP, :VTELEFONOEMP, :VCEDULAEMP, :VEMAILEMP, :VPUESTOEMP, :VSALARIOEMP); END;");
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


function EditaridCitas($idcita, $servicio_cita, $fecha_cita, $hora_cita, $telefono_cita, $nombre_mascota_cita)
{
    require_once('ConnBD.php');
    $conex = new Conexion();

    $getConection = $conex->Conectar();
    $sentencia = $getConection->prepare("BEGIN Editar_Cita(:IDCITA ,:SERVICIO_CITA, :FECHA_CITA,:HORA_CITA,:TELEFONO_CITA,:NOMBRE_MASCOTA_CITA); END;");
    $sentencia->bindParam(':IDCITA',$idcita);
    $sentencia->bindParam(':SERVICIO_CITA',$servicio_cita);
    $sentencia->bindParam(':FECHA_CITA',$fecha_cita);
    $sentencia->bindParam(':HORA_CITA',$hora_cita);
    $sentencia->bindParam(':TELEFONO_CITA',$telefono_cita);
    $sentencia->bindParam(':NOMBRE_MASCOTA_CITA',$nombre_mascota_cita);
    $sentencia->execute();

    return $sentencia;
    

  }


?>