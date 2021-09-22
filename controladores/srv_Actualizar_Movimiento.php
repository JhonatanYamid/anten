<?php 

require_once '../conexion.php';
$codigo=$_POST['codigo'];
$fechaentrada=$_POST['fechaentrada'];
$fechasalida=$_POST['fechasalida'];
$tipodagno=$_POST['tipodagno'];
$empleado=$_POST['empleado'];
$estado=$_POST['estado'];
$equipo=$_POST['equipo'];
$ordentrabajo=$_POST['ot'];
$observaciones=$_POST['observaciones'];

$sql="UPDATE tblmovimiento SET fecha_entrada='$fechaentrada', fecha_salida='$fechasalida',equipo='$equipo',Observaciones='$observaciones',Empleado='$empleado',Estado='$estado',consecutivo_ot='$ordentrabajo',Tipo_dagno='$tipodagno' where Consecutivo='$codigo' ";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1><br><a href='../vistas/tablas/tablaMovimiento.php' style='color:white;'>Regresar</a></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1><br><a href='../vistas/tablas/tablaMovimiento.php' style='color:white;'>Regresar</a></div>";

}
mysqli_close($conexion);

?>



