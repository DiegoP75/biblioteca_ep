<?php

include ("conexion_ep.php");

$cedula = $_POST["cedula"];
$Pnombre = $_POST["Primer_Nombre"];
$Snombre = $_POST["Segundo_Nombre"];
$AP = $_POST["Apellido_Paterno"];
$AM = $_POST["Apellido_Materno"];
$tlf= $_POST["Telefono"];
$correo = $_POST["Correo"];

$consultaSQL = "INSERT INTO usuarios(CI, Primer_Nombre, Segundo_Nombre, ApellidoP, ApellidoM, Telefono, Correo) VALUES ('$cedula', '$Pnombre', '$Snombre', '$AP', '$AM', '$tlf', '$correo');";

$resultado = mysqli_query($conexion, $consultaSQL);

if ($resultado) {
	header("Location: usuario.php?nuevaEntrada=guardada");
} 
else{
	header("Location: nuevaUsuario.php?nuevaEntrada=error");
}

?>