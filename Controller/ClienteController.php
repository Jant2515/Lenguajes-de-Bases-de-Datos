<?php

include_once __DIR__ . '\..\Model\ClienteModel.php';

function Clientelista()
{
  $stmt = ListarCliente();
  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo '<tr>';
    echo '<td>' . $row["idcliente"] . '</td>';
    echo '<td>' . $row["cedula"] . '</td>';
    echo '<td>' . $row["nombrecliente"] . '</td>';
    echo '<td>' . $row["apellidocliente"] . '</td>';
    echo '<td>' . $row["telefonocliente"] . '</td>';
    echo '<td>' . $row["emailcliente"] . '</td>';
    echo '<td><a type="button" href="EditarCliente.php?q='. $row['idcliente']. '" class="btn btn-outline-secondary">Editar</a>';
    echo '<td><a type="button" href="EliminarCliente.php?q='. $row['idcliente']. '"class="btn btn-outline-danger">Eliminar</a>';
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
  $CantonCli = $_POST["id_canton"];
  $DistritoCli = $_POST["id_distrito"];

  AgregarClienteModel($NombreCli, $ApellidoCli, $TelefonoCli, $EmailCli, $CedulaCli, $ProvinciaCli, $CantonCli, $DistritoCli);
  header("Location: Cliente.php");
}

if(isset($_POST["btnConfirmar"]))
{
  $IDCli = $_POST["idCli"];
  $CedulaCli = $_POST["cedula_cli"];
  $NombreCli = $_POST["nombre_cli"];
  $ApellidoCli = $_POST["apellido_cli"];
  $TelefonoCli = $_POST["telefono_cli"];
  $EmailCli = $_POST["mail_cli"];

  EditarClienteModel($IDCli, $NombreCli, $ApellidoCli, $TelefonoCli, $EmailCli, $CedulaCli);
  header("Location: Cliente.php");
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