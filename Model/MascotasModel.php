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

?>