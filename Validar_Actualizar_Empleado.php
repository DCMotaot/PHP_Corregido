<?php
    
require 'Conexion.php';

extract($_REQUEST);

$objConexion = Getconexion();

$Sentencia_Consulta = "UPDATE empleados SET Emp_Identificacion = '$_REQUEST [Identificacion_Usuario]', $_REQUEST [Nombre_Usuario]',
'$_REQUEST [Fecha_Ingreso]', '$_REQUEST [Correo]', '$_REQUEST [genero]', '$_REQUEST [cargo]' WHERE id_Empleado = '$_REQUEST[id_Empleado]'";

$Resultado = $objConexion->query($Sentencia_Consulta);

if($Resultado){
header("location:Listar_Empleados.php?x=1");
}else{
header("location:Listar_Empleados.php?x=2");
}
?>