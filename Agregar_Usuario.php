<?php

    require 'Conexion.php';

    $objConexion = Getconexion();

    $Sentencia_Consulta = "select car_Nombre, car_Sueldo from cargos";

    $Resultado = $objConexion -> query ($Sentencia_Consulta);
?>

<html>
    <head>
        <br>
        <title>Agregar Usuario</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <form action="Validar_Usuario.php" method="Post">

        <h1>Por favor agregue el usuario y la contraseña</h1>

        <label for="Usuario">Usuario: </label>
            <input type="text" id="Usuario" name="Nombre_Usuario">
            <br>
        <label for="Contraseña">Contraseña: </label>
            <input type="text" id="Contraseña" name="Contraseña_Usuario">
            <br>

        <input type="submit" value="Enviar">
    </form>
</html>