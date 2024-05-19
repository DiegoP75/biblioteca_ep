<?php

include("header.php");

include ("conexion_ep.php");

?>

<meta charset="UTF-8">
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/listaEntradas.css">

<title>Encìclicas</title>

<br>

<h2>Lista de encìclicas</h2>

<hr/>

<table class="table table-striped">
    <thead>
        <tr>
            <td class="text-center">
                Nombre en Latìn
            </td>
            <td class="text-center">
                Nombre en Español
            </td>
            <td class="text-center">
                PAPA
            </td>
            <td class="text-center">
                Año de Publicaciòn
            </td>
        </tr>
    </thead>
    <tbody>
<?php

$consultaSQL = "SELECT * FROM enciclicas";
$resultado = mysqli_query($conexion, $consultaSQL);

while($fila = mysqli_fetch_assoc($resultado)){
?>

        <tr class="filaConSombreado">
            <td class="text-center">
                <?php echo $fila["Nombre_Latin"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Nombre_Español"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Nombre_PAPA"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Año_Publicacion"]; ?>
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