<?php
    require 'Conexion.php';

    extract($_REQUEST);

    $objConexion = Getconexion();

    $Sentencia_Consulta = "INSERT INTO empleados (Emp_Identificacion, Emp_Nombre, Emp_FechaIngreso, 
    Emp_Correo, Emp_Genero, Emp_Cargo) VALUES ('$_REQUEST[Identificacion_Usuario]','$_REQUEST[Nombre_Usuario]','$_REQUEST[Fecha_Ingreso]',
    '$_REQUEST[Correo]','$_REQUEST[genero]','$_REQUEST[cargo]')";

    $Resultado = $objConexion->query($Sentencia_Consulta);

if($Resultado){
echo "Empleado registrado";
}else{
echo "Problemas al registrar el empleado";
}
?>
<html>
    <head>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <br>
    <br>
    <input type="submit" onclick="location='Agregar_Empleado.php'" value="Agregar Empleado">
</html>

