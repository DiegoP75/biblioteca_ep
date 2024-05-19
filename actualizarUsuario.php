<?php

include ("conexion_ep.php");

$cedula = $_POST["cedula"];
$Pnombre = $_POST["Primer_Nombre"];
$Snombre = $_POST["Segundo_Nombre"];
$AP = $_POST["Apellido_Paterno"];
$AM = $_POST["Apellido_Materno"];
$tlf= $_POST["Telefono"];
$correo = $_POST["Correo"];

$consultaSQL = "UPDATE usuarios SET Primer_Nombre = '$Pnombre', Segundo_Nombre = '$Snombre', ApellidoP= '$AP', ApellidoM= '$AM', Telefono= '$tlf' , Correo= '$correo'WHERE CI = '$cedula';";

$resultado = mysqli_query($conexion, $consultaSQL);

if ($resultado) {
	header("Location: Usuario.php?infEntrada=actualizada");
} 
else{
	header("Location: Usuario.php?infEntrada=error");
}

?>