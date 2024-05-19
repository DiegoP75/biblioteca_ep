<?php

include("header.php");

include ("conexion_ep.php");

?>

<meta charset="UTF-8">
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/listaEntradas.css">

<title>Usuario</title>

<br>

<h2>Usuarios</h2>

<a href='nuevoUsuario.php' class='boton'>Añadir nuevo usuario</a>

<hr/>

<table class="table table-striped">
    <thead>
        <tr>
            <td class="text-center">
                Cédula
            </td>
            <td class="text-center">
                Primer Nombre 
            </td>
            <td class="text-center">
                Segundo Nombre
            </td>
            <td class="text-center">
                Apellido Paterno
            </td>
            <td class="text-center">
                Apellido Materno
            </td>
            <td class="text-center">
                Teléfono
            </td>
            <td class="text-center">
                Correo
            </td>
            <td class="text-center">
                Acciones
            </td>
        </tr>
    </thead>
    <tbody>
<?php

$consultaSQL = "SELECT * FROM Usuarios";
$resultado = mysqli_query($conexion, $consultaSQL);

while($fila = mysqli_fetch_assoc($resultado)){
?>

        <tr class="filaConSombreado">
            <td class="text-center">
                <?php echo $fila["CI"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Primer_Nombre"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["Segundo_Nombre"]; ?>
            </td>

            <td class="text-center">
                <?php echo $fila["ApellidoP"]; ?>
            </td>
            <td class="text-center">
                <?php echo $fila["ApellidoM"]; ?>
            </td>
            <td class="text-center">
                <?php echo $fila["Telefono"]; ?>
            </td>
            <td class="text-center">
                <?php echo $fila["Correo"]; ?>
            </td>
            <td class="text-center columnaSinEstilos">
                <a href=<?php echo "editarUsuario.php?ci=" . $fila["CI"] ?> class="boton">Editar</a>
                <a href=<?php echo "eliminarUsuario.php?ci=" . $fila["CI"] ?> class="boton">Eliminar</a>
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