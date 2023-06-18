<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

    $Sentencia_Consulta = "SELECT e.Emp_Identificacion, e.Emp_Nombre, Emp_FechaIngreso, e.Emp_Correo, c.car_Nombre, c.car_Sueldo FROM empleados e, cargos c WHERE (e.Emp_Cargo = c.id_cargo)";

    $Resultado = $objConexion->query($Sentencia_Consulta);

?>

<html>
    <head>
        <title>Empleados</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
<div>
    <br>
    <br>
    <br>
    <br>
    <table width="89%" border = "0" align="center">
        <thead>
            <tr align="center" bgcolor = "#15F528" >
                <td width = "11%">Identificación</td>
                <td width = "16%">Nombre</td>
                <td width = "12%">Fecha de Ingreso</td>
                <td width = "19%">Correo</td>
                <td width = "15%">Cargo</td>
                <td width = "10%">Salario</td>
                <td width = "10%">Editar</td>
                <td width = "10%">Eliminar</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($Filas=mysqli_fetch_assoc($Resultado))
            {
            ?>
            <tr align = "center" bgcolor = #F5E956>
                <td><?php echo $Filas['Emp_Identificacion']?></td>
                <td><?php echo $Filas['Emp_Nombre']?></td>
                <td><?php echo $Filas['Emp_FechaIngreso']?></td>
                <td><?php echo $Filas['Emp_Correo']?></td>
                <td><?php echo $Filas['car_Nombre']?></td>
                <td><?php echo $Filas['car_Sueldo']?></td>
                <td align="center"><img src="../Conexion/Images/lapiz.png" width="29" height="24" input type="submit" onclick="location='Editar_Empleado.php'"onclick=""></td>
                <td align="center"><img src="../Conexion/Images/borrar.png" width="29" height="24"></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>
<br>
<br>
<br>
<br>

<h2>Si desea agregar un empleado de clic</h2>
<input type="submit" onclick="location='Agregar_Empleado.php'" value="Agregar">


</html>