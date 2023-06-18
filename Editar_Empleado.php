<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

    $Sentencia_Consulta = "select id_cargo, car_Nombre from cargos";

    $ResultadoCargos = $objConexion -> query ($Sentencia_Consulta);

    $Sentencia_Consulta = "select * from empleados where id_Empleado = '$_REQUEST[id_Empleado]'";

    $ResultadoEmpleados = $objConexion -> query ($Sentencia_Consulta);

    $Empleados = $ResultadoEmpleados -> fetch_object();

?>

<html>
    <head>
        <title>Actualizar Empleado</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <form action="Validar_Actualizar_Empleado.php" method="Post">

    <br>

        <h1>Empleados</h1>

            <label for="Identificacion">Identificación: </label>
            <input type="text" id="Identificacion" name="Identificacion_Usuario" value=<?php echo $Empleados->Emp_Identificacion?>>

            <label for="Nombre">Nombre Empleado: </label>
            <input type="text" id="Nombre" name="Nombre_Usuario" value="<?php echo $Empleados -> Emp_Nombre?>">

            <label for="fecha_ingreso">Fecha de ingreso:</label>
            <input type="date" name="Fecha_Ingreso" required value="<?php echo $Empleados -> Emp_FechaIngreso?>">
            <br>
            <br>
            
            <label for="correo">Correo:</label>
            <input type="email" name="Correo" required value="<?php echo $Empleados -> Emp_Correo?>">
            <br>
            <br>
            
            <label for="genero" id="Genero">Género:</label>
            <select name="genero" required>
                <option value="0">Seleccione:</option>
                <?php
                if($Empleados->Emp_Genero=='Femenino')
                {
                ?>
                <option value="Femenino" selected="selected">Femenino</option>
                <option value="Masculino">Masculino</option>
                <?php
                }else
                {
                    ?>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino" selected="selected">Masculino</option>
                    <?php
                }
                ?>
            </select>
            <br>
            <br>
            
            <label for="cargo" id="Cargo">Cargo:</label>
            <select name="cargo" required>
                <option value="0"></option>
                <?php
                while ($Cargo=$Resultado->fetch_object())
                {
                ?>
                <?php
                if($Cargo->id_cargo==$Empleados->Emp_Cargo)
                {
                ?>
                <option value="<?php echo $Cargo->id_cargo?>" selected="selected"><?php echo $Cargo->car_Nombre?></option>
                <?php
                }
                ?>
                <option value="<?php echo $Cargo->id_cargo?>"><?php echo $Cargo->car_Nombre?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Actualizar">
            <input type="hidden" name="Id_Empleado" value="<?php echo $_REQUEST['id_Empleado']?>"/>
    </form>
</html>