<?php 
$usuario="root";
$pass="";
$servidor="localhost";
$basedatos="mantenimiento";

$conexion= mysqli_connect($servidor, $usuario, $pass) or die ("error en el servidor");
$bd= mysqli_select_db($conexion, $basedatos) or die ("error con la base de datos");


 ?>



 