<?php

include('conexion_ep.php');

$id_enciclica = $_POST['id_enciclica'];
$id_enciclica = explode(' - ', $id_enciclica)[0];
$ci_usuario = $_POST['ci_usuario'];
$ci_usuario = explode(' - ', $ci_usuario)[0];
$fechaPrest = $_POST['fechaPrestamo'];
$fechaDevol = $_POST['fechaDevol'];

$consulta_SQL = "INSERT INTO prestamos(ID_enciclica, CI, Fecha_Prestamo, Fecha_Devolucion) VALUES ('$id_enciclica', '$ci_usuario', '$fechaPrest', '$fechaDevol');";

$resultado = mysqli_query($conexion, $consulta_SQL);

if ($resultado){
    header('Location: prestamos.php?correcto');
}
else{
    header('Location: prestamos.php?error');
}

?>