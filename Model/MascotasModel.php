<?php

function ListarCitas()
{
  require_once('ConnBD.php');
  $conex = new Conexion();

  $getConection = $conex->Conectar();
  $sql = "select * from cita";
  $stmt = $getConection->prepare($sql);
  $stmt->execute();

  return $stmt;
}

?>