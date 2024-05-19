<?php

include ("header.php");
include ("conexion_ep.php")

?>

<meta charset="utf-8">

<script rel="text/javascript" src="assets/js/validaciones.js"></script>

<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/nuevaEntrada.css">

<title>Añadir nuevo usuario</title>

<br>

<h2 class="text-center">Añadir nuevo usuario</h2>

<div class="container text-center contenedorFormulario">
    <form action="procesarNuevoUsuario.php"   class="form-group" method="POST">
        <label for="entrada">Cedula</label>
        <br>
        <input min="0" id="entrada" type="number" name="cedula" class="form-control" autofocus >
        <br>
        <label for="modulo">Primer Nombre</label>
        <br>
        <input id="entrada" type="text" name="Primer_Nombre" class="form-control" autofocus >
        <br>
        <label for="anoEstreno">Segundo Nombre</label>
        <input id="anoEstreno" type="text" name="Segundo_Nombre" class="form-control">
        <br>
        <label for="fechaRedaccion">Apellido Paterno</label>
        <br>
        <input type="text" id="fechaRedaccion" name="Apellido_Paterno" class="form-control" >
        <br>
        <label for="enlace">Apellido Materno</label>
        <br>
        <input type="text" id="enlace" name="Apellido_Materno" class="form-control" >
        <br>
        <label for="enlace">Telefono</label>
        <br>
        <input type="text" id="enlace" name="Telefono" class="form-control" >
        <br>
        <label for="enlace">Correo</label>
        <br>
        <input type="text" id="enlace" name="Correo" class="form-control">
        <br>
        <button type="submit" class="botonEnviar">Guardar usuario</button>
        <a href="Usuario.php" class="botonCancelar">Cancelar</a>
    </form>
</div>

<?php

include('footer.php');

?>