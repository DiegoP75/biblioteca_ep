<?php

include ("header.php");
include ("conexion_ep.php");

?>

<title>Actualizar info.</title>

<link rel="stylesheet" href="assets/css/editarInfEntrada.css">

<br>

<h2 class="text-center">Editar información de la entrada</h2>

<?php

$ci = $_REQUEST["ci"];

$consultaSQL = "SELECT * FROM usuarios WHERE ci = '$ci';";

$resultado = mysqli_query($conexion, $consultaSQL);

while ($fila = mysqli_fetch_assoc($resultado)){
?>

<div class="container text-center contenedorFormulario">
    <form action="actualizarUsuario.php" class="form-group" method="POST">

        <br>

        <label for="modulo">Primer Nombre</label>

        <br>

        <input id="entrada" type="text" name="Primer_Nombre" class="form-control" autofocus value="<?php echo $fila['Primer_Nombre']; ?>">

        <br>
        <label for="anoEstreno">Segundo Nombre</label>
        <input id="anoEstreno" type="text" name="Segundo_Nombre" class="form-control" value="<?php echo $fila['Segundo_Nombre']; ?>">

        <br>

        <label for="fechaRedaccion">Apellido Paterno</label>

        <br>

        <input type="text" id="fechaRedaccion" name="Apellido_Paterno" class="form-control" value="<?php echo $fila['ApellidoP']; ?>">

        <br>

        <label for="enlace">Apellido Materno</label>
        <br>
        <input type="text" id="enlace" name="Apellido_Materno" class="form-control" value="<?php echo $fila['ApellidoM']; ?>" >
        <br>

        <label for="enlace">Telefono</label>

        <br>

        <input type="text" id="enlace" name="Telefono" class="form-control" value="<?php echo $fila['Telefono']; ?>" >
        <br>

        <label for="enlace">Correo</label>

        <br>

        <input type="text" id="enlace" name="Correo" class="form-control" value="<?php echo $fila['Correo']; ?>" >

        <button type="submit" class="botonEnviar">Guardar info.</button>

        <a href="listaEntradas.php" class="botonCancelar">Cancelar</a>

        <input type="hidden" name="cedula" value="<?php echo $ci; ?>">
    </form>
</div>

<?php
}
include('footer.php');
?>