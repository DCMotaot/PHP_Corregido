<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

    $Sentencia_Consulta = "select id_cargo, car_Nombre from cargos";

    $Resultado = $objConexion -> query ($Sentencia_Consulta);

?>

<html>
    <head>
        <title>Agregar Empleado</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <form action="Registrar_Empleado.php" method="Post">

    <br>

        <h1>Empleados</h1>

            <label for="Identificacion">Identificación: </label>
            <input type="text" id="Identificacion" name="Identificacion_Usuario">
            <br>
            <br>

            <label for="Nombre">Nombre Empleado: </label>
            <input type="text" id="Nombre" name="Nombre_Usuario">
            <br>
            <br>

            <label for="fecha_ingreso">Fecha de ingreso:</label>
            <input type="date" name="Fecha_Ingreso" required>
            <br>
            <br>
            
            <label for="correo">Correo:</label>
            <input type="email" name="Correo" required>
            <br>
            <br>
            
            <label for="genero" id="Genero">Género:</label>
            <select name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
            <br>
            <br>
            
            <label for="cargo" id="Cargo">Cargo:</label>
            <select name="cargo" required>
                <option value="0"></option>
                <?php
                while($Cargo=$Resultado->fetch_object())
                {
                echo  "<option value=".$Cargo->id_cargo.">".$Cargo->car_Nombre."</option>";
                }
                ?>
            </select>
            <br>
            <br>
            <input type="submit" value="Enviar">
            <input type="submit" onclick="location='Empleados.php'" value="Ver Empleados">
            <input type="submit" onclick="location='Agregar_Cargo.php'" value="Agregar Cargo">

            
    </form>


</html>


