<?php

include("header.php");

include ("conexion_ep.php");

?>

<meta charset="UTF-8">
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/listaEntradas.css">

<title>Episcopado</title>

<br>

<h2>Episcopado</h2>

<hr/>

<table class="table table-striped">
    <thead>
        <tr>
            <td class="text-center">
                Nombre Papa
            </td>
            <td class="text-center">
                Nombre original
            </td>
            <td class="text-center">
                Apellido
            </td>
            <td class="text-center">
                Fecha de nacimiento
            </td>
            <td class="text-center">
                Nùmero de encìclica
            </td>
        </tr>
    </thead>
    <tbody>
<?php

$consultaSQL = "SELECT * FROM episcopado";
$resultado = mysqli_query($conexion, $consultaSQL);

while($fila = mysqli_fetch_assoc($resultado)){
?>

        <tr class="filaConSombreado">
            <td class="text-center">
                <?php echo $fila["ID_Nombre_PAPA"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Nombre_Original"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Apellido"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Fecha_N"]; ?>
            </td>
            <td class="text-center">
                <?php echo $fila["N_Enciclicas"]; ?>
            </td>
        </tr>
<?php
}
?>
    </tbody>
</table>

<?php

include('footer.php');

?>