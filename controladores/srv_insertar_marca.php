<?php 
require_once('../conexion.php');
$codigo=$_POST['codigo'];
$nombre= $_POST['nombre'];
$fabrica= $_POST['fabrica'];
$sql="INSERT INTO tblmarca values ('$codigo', '$nombre', '$fabrica')";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/frm_insert_Marca.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/frm_insert_Marca.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);

?>