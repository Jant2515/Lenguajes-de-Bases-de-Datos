<?php

include_once __DIR__ . '\..\Model\MascotasModel.php';

function Citalista()
{
  $stmt = ListarCitas();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["servicio_cita"] . '</td>';
    echo '<td>' . $row["fecha_cita"] . '</td>';
    echo '<td>' . $row["hora_cita"] . '</td>';
    echo '<td>' . $row["telefono_cita"] . '</td>';
    echo '<td>' . $row["nombre_mascota_cita"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
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
    echo '<td>' . $row["Nombre_masc"] . '</td>';
    echo '<td>' . $row["Edad_masc"] . '</td>';
    echo '<td>' . $row["Peso_masc"] . '</td>';
    echo '<td>' . $row["talla_masc"] . '</td>';
    echo '<td>' . $row["Genero_masc"] . '</td>';
    echo '<td>' . $row["Esterelizado_masc"] . '</td>';
    echo '<td>' . $row["Pedigree_masc"] . '</td>';
    echo '<td>' . $row["Dueno_masc"] . '</td>';
    echo '<td>' . $row["IdCliente"] . '</td>';
    echo '<td>' . $row["raza_masc"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}
function CLientelista()
{
  $stmt = ListarCliente();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["Cedula"] . '</td>';
    echo '<td>' . $row["NombreCliente"] . '</td>';
    echo '<td>' . $row["ApellidoCliente"] . '</td>';
    echo '<td>' . $row["TelefonoCliente"] . '</td>';
    echo '<td>' . $row["EmailCliente"] . '</td>';
    echo '<td>' . $row["IdProvincia"] . '</td>';
    echo '<td>' . $row["IdCanton"] . '</td>';
    echo '<td>' . $row["IdDistrito"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

function Empleadolista()
{
  $stmt = ListarCliente();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["CedulaEmp"] . '</td>';
    echo '<td>' . $row["NombreEmp"] . '</td>';
    echo '<td>' . $row["ApellidoEmp"] . '</td>';
    echo '<td>' . $row["TelefonoEmp"] . '</td>';
    echo '<td>' . $row["EmailEmp"] . '</td>';
    echo '<td>' . $row["PuestoEmp"] . '</td>';
    echo '<td>' . $row["SalarioEmp"] . '</td>';
    echo '<td>' . $row["IdProvincia"] . '</td>';
    echo '<td>' . $row["IdCanton"] . '</td>';
    echo '<td>' . $row["IdDistrito"] . '</td>';
    echo '<td><a type="button" href="EditarCita.php" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" class="btn btn-outline-danger">Eliminar</a>';
    echo '</tr>';
  }
}

?>