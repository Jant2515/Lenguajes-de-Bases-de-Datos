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

function EditarCitasModel($idcita, $servicio_cita, $fecha_cita, $hora_cita, $telefono_cita, $nombre_mascota_cita)
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