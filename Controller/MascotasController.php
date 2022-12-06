<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

function Citalista()
{
  $stmt = ListarCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcita"] . '</td>';
    echo '<td>' . $row["servicio_cita"] . '</td>';
    echo '<td>' . $row["fecha_cita"] . '</td>';
    echo '<td>' . $row["hora_cita"] . '</td>';
    echo '<td>' . $row["telefono_cita"] . '</td>';
    echo '<td>' . $row["nombre mascota"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarCita"]))
{
  $ServicioCita = $_POST["serviciocita"];
  $FechaCita= $_POST["fechacita"];
  $HoraCita = $_POST["horacita"];
  $TelCita = $_POST["telcita"];
  $MascotaCita = $_POST["mascotacita"];

  AgregarCitasModel($ServicioCita, $FechaCita, $HoraCita, $TelCita, $MascotaCita);
  header("Location: Cita.php");
}

if(isset($_POST["editarCita"]))
{
    $IDCita = $_POST["idCita"];
    $ServicioCita = $_POST["serviciocita"];
    $FechaCita= $_POST["fechacita"];
    $HoraCita = $_POST["horacita"];
    $TelCita = $_POST["telcita"];
    $MascotaCita = $_POST["mascotacita"];

    EditarCitasModel($IDCita, $ServicioCita, $FechaCita, $HoraCita, $TelCita, $MascotaCita);
    header("Location: Cita.php");
}

//FALTA ENVIAR PARAMETROS BIEN Y CONFIGURAR BIEN 
/*if(isset($_POST["btnbtnConfirmar"]))
{
    $Nombre = $_POST["servicio_cita"];
    $Contrasenna = $_POST["fecha_cita"];
    $Correo = $_POST["hora_cita"];
    $TipoUsuario = $_POST["telefono_cita"];
    $Id = $_POST["nombre_mascota_cita"];

    ActualizarCitasModel($Nombre, $Contrasenna, $Correo, $TipoUsuario, $Id);  
    header("Location: MantUsuario.php");  
}*/

function Mascotalista()
{
  $stmt = ListarMascota();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["nombre_masc"] . '</td>';
    echo '<td>' . $row["edad_masc"] . '</td>';
    echo '<td>' . $row["genero_masc"] . '</td>';
    echo '<td>' . $row["esterelizado_masc"] . '</td>';
    echo '<td>' . $row["pedigree_masc"] . '</td>';
    echo '<td>' . $row["dueno"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarMascota"]))
{
  $NomMas = $_POST["nombre_masc"];
  $RazaMas = $_POST["raza"];
  $EdadMas = $_POST["edad"];
  $PesoMas = $_POST["peso"];
  $TallaMas = $_POST["talla"];
  $GeneroMas = $_POST["genero"];
  $EsterilizadoMas = $_POST["esterelizacion"];
  $PedigreeMas = $_POST["pedigree"];
  $IdCliente = $_POST["idclient"];

  AgregarMascotaModel($NomMas, $RazaMas, $EdadMas, $PesoMas, $TallaMas, $GeneroMas, $EsterilizadoMas, $PedigreeMas, $IdCliente);
  header("Location: Mascota.php");
}

function Clientelista()
{
  $stmt = ListarCliente();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["cedula"] . '</td>';
    echo '<td>' . $row["nombrecliente"] . '</td>';
    echo '<td>' . $row["apellidocliente"] . '</td>';
    echo '<td>' . $row["telefonocliente"] . '</td>';
    echo '<td>' . $row["emailcliente"] . '</td>';
    echo '<td><a type="button" href="EditarCliente.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarCliente"]))
{
  $CedulaCli = $_POST["cedula_cli"];
  $NombreCli = $_POST["nombre_cli"];
  $ApellidoCli = $_POST["apellido_cli"];
  $TelefonoCli = $_POST["telefono_cli"];
  $EmailCli = $_POST["mail_cli"];
  $ProvinciaCli = $_POST["id_provincia"];
  $CantonCli = $_POST["id_cant"];
  $DistritoCli = $_POST["salario_emp"];

  AgregarClienteModel($NombreCli, $ApellidoCli, $TelefonoCli, $EmailCli, $CedulaCli, $ProvinciaCli, $CantonCli, $DistritoCli);
  header("Location: Cliente.php");
}

function Empleadolista()
{
  $stmt = ListarEmpleado();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["cedulaemp"] . '</td>';
    echo '<td>' . $row["nombreemp"] . '</td>';
    echo '<td>' . $row["apellidoemp"] . '</td>';
    echo '<td>' . $row["telefonoemp"] . '</td>';
    echo '<td>' . $row["emailemp"] . '</td>';
    echo '<td>' . $row["puestoemp"] . '</td>';
    echo '<td>' . $row["salarioemp"] . '</td>';
    echo '<td><a type="button" href="EditarEmpleado.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

if(isset($_POST["agregarEmp"]))
{
  $CedulaEmp = $_POST["cedula_emp"];
  $NombreEmp= $_POST["nombre_emp"];
  $ApellidoEmp = $_POST["apellido_emp"];
  $TelefonoEmp = $_POST["telefono_emp"];
  $EmailEmp = $_POST["mail_emp"];
  $PuestoEmp = $_POST["puesto_emp"];
  $SalarioEmp = $_POST["salario_emp"];

  AgregarEmpleadoModel($NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp);
  header("Location: Empleado.php");
}


  if(isset($_POST["agregarServicio"]))
{
    $NombreServicio = $_POST["nombreServicio"];
    $DescipcionServicio= $_POST["DescripcionServicio"];
    $PrecioServicio = $_POST["PrecioServicio"];

    AgregarServiciosModel($NombreServicio, $DescipcionServicio, $PrecioServicio);
    header("Location: Servicios.php");
}


if(isset($_POST["Editarcita"]))
{
 $idcita =$_POST["idCita"];
 $servicio_cita =$_POST["serviciocita"];
 $fecha_cita =$_POST["fechacita"];
 $hora_cita =$_POST["horacita"];
 $telefono_cita =$_POST["telcita"];
 $nombre_mascota_cita =$_POST["mascotacita"];

 EditaridCitas($idcita, $servicio_cita, $fecha_cita, $hora_cita, $telefono_cita, $nombre_mascota_cita);
  header("Location: Cita.php");
}

?>