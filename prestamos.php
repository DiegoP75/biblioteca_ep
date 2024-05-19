<?php

include("header.php");

include ("conexion_ep.php");

?>

<meta charset="UTF-8">
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/listaEntradas.css">

<title>Prestamos</title>

<br>

<h2>Prestamos</h2>

<a href='nuevoPrestamo.php' class='boton'>Añadir nuevo prestamo</a>

<hr/>

<table class="table table-striped">
    <thead>
        <tr>
            <td class="text-center">
                ID Del Prestamo
            </td>
            <td class="text-center">
                ID De La Enciclica
            </td>
            <td class="text-center">
                Cedula Del Usuario
            </td>
            <td class="text-center">
                Fecha Del Prestamo
            </td>
            <td class="text-center">
                Fecha De La Devolucion
            </td>
        </tr>
    </thead>
    <tbody>
<?php

$consultaSQL = "SELECT * FROM Prestamos";
$resultado = mysqli_query($conexion, $consultaSQL);

while($fila = mysqli_fetch_assoc($resultado)){
?>

        <tr class="filaConSombreado">
            <td class="text-center">
                <?php echo $fila["Prestamo_ID"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["ID_enciclica"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["CI"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Fecha_Prestamo"]; ?>
            </td>
            <td class="text-center">
                <?php echo $fila["Fecha_Devolucion"]; ?>
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