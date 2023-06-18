<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

    extract($_REQUEST);

    $Sentencia_Consulta = "SELECT * FROM empleados WHERE Emp_Identificacion = $_REQUEST[Documento_Usuario]";

    $Resultado = $objConexion->query($Sentencia_Consulta);

    while($empleados=$Resultado->fetch_object())
    {
        echo "<br> Identificación del empleado: ".$empleados->Emp_Identificacion;
        echo "<br> Nombre del empleado: ".$empleados->Emp_Nombre;
        echo "<br> Fecha de ingreso del empleado: ".$empleados->Emp_FechaIngreso;
        echo "<br> Correo del empleado: ".$empleados->Emp_Correo;
        echo "<br> Genero del empleado: ".$empleados->Emp_Genero;
        echo "<br> Cargo del empleado: ".$empleados->Emp_Cargo;
    }

    

    /*$Sentencia_Consulta = "select * from empleados where Emp_Identificacion = '' ";

    $Resultado = $objConexion -> query ($Sentencia_Consulta);

    // Imprimir en pantalla los datos del empleado

    if($empleado=$Resultado->fetch_object())
    {
        echo "<br> Identificación del empleado: ".$empleado->Emp_Identificacion;
        echo "<br> Nombre del empleado: ".$empleado->Emp_Nombre;
        echo "<br> Fecha de ingreso del empleado: ".$empleado->Emp_FechaIngreso;
        echo "<br> Correo del empleado: ".$empleado->Emp_Correo;
        echo "<br> Genero del empleado: ".$empleado->Emp_Genero;
        echo "<br> Cargo del empleado: ".$empleado->Emp_Cargo;

    }
    else
    {
        echo "El empleado no existe";
    }*/


?>

