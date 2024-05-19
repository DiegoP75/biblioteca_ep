<?php

include ("header.php");
include ("conexion_ep.php")

?>

<meta charset="utf-8">

<script rel="text/javascript" src="assets/js/validaciones.js"></script>

<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/nuevaEntrada.css">

<title>Añadir nuevo prestamo</title>

<br>

<h2 class="text-center">Añadir nuevo prestamo</h2>

<div class="container text-center contenedorFormulario">
    <form action="procesarNuevoPrestamo.php"   class="form-group" method="POST">
        <label for="entrada">ID Enciclica</label>
        <br>
        <select class='form-control' name="id_enciclica">
            <?php
                $consultaSQL = "SELECT ID_enciclica AS ID, Nombre_Latin AS NL FROM enciclicas";
                $resultado = mysqli_query($conexion, $consultaSQL);
                while($fila = mysqli_fetch_assoc($resultado)){
            ?>
                    <option>
                        <?php echo $fila["ID"] . ' - ' . $fila["NL"]; ?>
                    </option>
        <?php
        }
        ?>
        </select>
        <br>
        <label for="entrada">Cédula Usuario</label>
        <br>
        <select class='form-control' name="ci_usuario">
            <?php
                $consultaSQL = "SELECT CI, Primer_Nombre AS PN, ApellidoP AS AP FROM usuarios";
                $resultado = mysqli_query($conexion, $consultaSQL);
                while($fila = mysqli_fetch_assoc($resultado)){
            ?>
                    <option>
                        <?php echo $fila["CI"] . ' - ' . $fila["PN"] . ' ' . $fila["AP"]; ?>
                    </option>
        <?php
        }
        ?>
        </select>
        <br>
        <label for="fechaPrestamo">Fecha préstamo</label>
        <input id="fechaPrestamo" type="date" name="fechaPrestamo" class="form-control">
        <br>
        <label for="fechaDevol">Fecha devolución</label>
        <br>
        <input type="date" id="fechaDevol" name="fechaDevol" class="form-control">
        <br>
        <button type="submit" class="botonEnviar">Guardar préstamo</button>
        <a href="prestamos.php" class="botonCancelar">Cancelar</a>
    </form>
</div>

<?php

include('footer.php');

?>