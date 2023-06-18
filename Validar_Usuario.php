<?php
require 'Conexion.php';
extract($_REQUEST);
$objConexion = Getconexion();
$Sentencia_Consulta = "INSERT INTO usuarios (Usu_Login, Usu_Password) VALUES ('$_REQUEST[Nombre_Usuario]',
'$_REQUEST[Contraseña_Usuario]')";
$Resultado = $objConexion->query($Sentencia_Consulta);
if($Resultado){
echo "Usuario registrado con exito";
}else{
echo "Problemas al registrar el usuario";
}
?>