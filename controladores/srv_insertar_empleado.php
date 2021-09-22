<?php 
require_once('../conexion.php');
$docid=$_POST['docid'];
$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$celular= $_POST['celular'];
$correo= $_POST['correo'];
$sql="INSERT INTO tblempleado values ('$docid', '$nombres', '$apellidos', '$celular', '$correo')";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/tablas/tablaEmpleado.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/tablas/tablaEmpleado.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);

?>