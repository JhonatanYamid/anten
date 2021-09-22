<?php 

require_once '../conexion.php';
$codigo=$_POST['codigo'];
$Descripcion=$_POST['descripcion'];
$Marca=$_POST['marca'];
$Modelo=$_POST['modelo'];
$Estado=$_POST['estado'];
$Fechaingreso=$_POST['fechaingreso'];
$Costo=$_POST['costo'];

$sql="UPDATE tblequipo SET Descripcion='$Descripcion', idMarca='$Marca',idModelo='$Modelo',idEstado='$Estado', fechaIngreso='$Fechaingreso',Costo='$Costo' where idEquipo='$codigo' ";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1></div>";

}
mysqli_close($conexion);

?>



