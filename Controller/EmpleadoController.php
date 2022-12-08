<?php

include_once __DIR__ . '\..\Model\EmpleadoModel.php';

function Empleadolista()
{
  $stmt = ListarEmpleado();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idempleado"] . '</td>';
    echo '<td>' . $row["cedulaemp"] . '</td>';
    echo '<td>' . $row["nombreemp"] . '</td>';
    echo '<td>' . $row["apellidoemp"] . '</td>';
    echo '<td>' . $row["telefonoemp"] . '</td>';
    echo '<td>' . $row["emailemp"] . '</td>';
    echo '<td>' . $row["puestoemp"] . '</td>';
    echo '<td>' . $row["salarioemp"] . '</td>';
    echo '<td><a type="button" href="EditarEmpleado.php?q='. $row['idempleado']. '" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" href="EliminarEmpleado.php?id='. $row['idempleado']. '"class="btn btn-outline-danger">Eliminar</a>';
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
  $idProvincia = $_POST["id_provincia"];
  $idCanton = $_POST["id_canton"];
  $idDistrito = $_POST["id_distrito"];

  AgregarEmpleadoModel($NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp, $idProvincia, $idCanton, $idDistrito);
  header("Location: Empleado.php");
}

if(isset($_POST["btnConfirmar"]))
{
  $IdEmp = $_POST["id_emp"];
  $CedulaEmp = $_POST["cedula_emp"];
  $NombreEmp= $_POST["nombre_emp"];
  $ApellidoEmp = $_POST["apellido_emp"];
  $TelefonoEmp = $_POST["telefono_emp"];
  $EmailEmp = $_POST["mail_emp"];
  $PuestoEmp = $_POST["puesto_emp"];
  $SalarioEmp = $_POST["salario_emp"];

  EditarEmpleadoModel($IdEmp, $NombreEmp, $ApellidoEmp, $TelefonoEmp, $CedulaEmp, $EmailEmp, $PuestoEmp, $SalarioEmp);
  header("Location: Empleado.php");
}

//funcion para llamar provincias

function ListaProvincia()

{

  $stmt = ListarProvinciaModel();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC))

  {

    echo '<option selected value="' . $row["idprovincia"] . '">' . $row["nombre_prov"] . '</option>';

  }

}

//funcion para llamar cantones

function ListaCanton()

{

  $stmt = ListarCantonModel();

  while($row1 = $stmt->fetch(PDO::FETCH_ASSOC))

  {

    echo '<option selected value="' . $row1["idcanton"] . '">' . $row1["nombre_cant"] . '</option>';

  }

}

//funcion para llamar distritos

function ListaDistrito()

{

  $stmt = ListarDistritoModel();

  while($row2 = $stmt->fetch(PDO::FETCH_ASSOC))

  {

    echo '<option selected value="' . $row2["iddistrito"] . '">' . $row2["nombre_dist"] . '</option>';

  }

}
?>