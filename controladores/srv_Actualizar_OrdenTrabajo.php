<?php 

require_once '../conexion.php';
$codigo=$_POST['codigo'];
$ordentrabajo=$_POST['nombre'];
$fechaorden=$_POST['fechaorden'];
$empleado=$_POST['empleado'];
$estado=$_POST['estado'];

$sql="UPDATE tblordentrabajo SET ordentrabajo='$ordentrabajo', fecha_orden='$fechaorden',Empleado='$empleado',Estado='$estado' where Codigo='$codigo' ";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/tablas/tablaOrdenTrabajo.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/tablas/tablaOrdenTrabajo.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);

?>



