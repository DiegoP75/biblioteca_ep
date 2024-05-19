<?php

include ("conexion_ep.php");

$Cedula = $_REQUEST["ci"];


$consultaSQL = "DELETE FROM usuarios WHERE CI = '$Cedula';";

$resultado = mysqli_query($conexion, $consultaSQL);


if ($resultado){
    header("Location: Usuario.php?entrada=borrada");
}
else{
    header("Location: Usuario.php?entrada=error");
}

?>