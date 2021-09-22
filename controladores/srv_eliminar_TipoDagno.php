<?php 
require_once '../conexion.php';

$codigo=$_GET['codigo'];

$sql="DELETE from tbltipodagno where codigo='$codigo'";

$resul=mysqli_query($conexion,$sql);

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/frm_insert_TipoDagno.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/frm_insert_TipoDagno.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);


?>