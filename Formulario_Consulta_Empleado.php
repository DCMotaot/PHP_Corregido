<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

?>

<html>
    <head>
        <br>
        <title>Consulta Empleado</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <form action="Consultar_Empleado.php" method="Post">

        <h1>Indique el número de documento del empleado</h1>

        <label for="Documento">Documento: </label>
            <input type="text" id="Documento" name="Documento_Usuario">
            <br>
        <input name ="Consulta_Empleado" type="submit" value="Enviar">
    </form>
</html>