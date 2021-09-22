<?php 
require_once('../conexion.php');
$codigo=$_POST['codigo'];
$descripcion= $_POST['descripcion'];
$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$estado= $_POST['estado'];
$fechaingreso= $_POST['fechaingreso'];
$costo= $_POST['costo'];
$sql="INSERT INTO tblequipo values ('$codigo', '$descripcion', '$marca', '$modelo', '$estado', '$fechaingreso', '$costo')";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/tablas/tablaEquipo.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/tablas/tablaEquipo.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);

?>