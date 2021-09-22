<!DOCTYPE html>
<html>
<head>
	<title>OrdenTrabajo</title>
	<link rel= "stylesheet" type ="text/css" href="../../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../../css/bootstrap.css">
	<script src="../../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
	<?php require_once('../../conexion.php'); 
	$sql= "SELECT * from vta_select_ordenTrabajo";
	$result = mysqli_query($conexion,$sql); 
	?>
</head>
<body style="margin: 2vw;">
	<br>
	<br>
	<h4 style="color:#777;">ORDEN DE TRABAJO</h4>
	<br>
	<br>
							<div class="container-fluid"  >
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-hover table-condensed ">
											<tr>
												<td>Codigo</td>
												<td>Orden de Trabajo</td>
												<td>Fecha de Orden</td>
												<td>Empleado</td>
												<td>Estado</td>
												<td>Equipo</td>
												<td>Editar</td>
												<td>Eliminar</td>
											</tr>
											<?php while($ver=mysqli_fetch_row($result)){ ?>
												<tr>
													<td><?php echo $ver[0]; ?></td>
													<td><?php echo $ver[1]; ?></td>
													<td><?php echo $ver[2]; ?></td>
													<td><?php echo $ver[4]." ".$ver[5]; ?></td>
													<td><?php echo $ver[7]; ?></td>
													<td><?php echo $ver[8]; ?></td>
													<td><a class="btn btn-primary" href="../../vistas/frm_update_ordenTrabajo.php?codigo=<?php echo $ver[0]; ?>">♦</a></td>
													<td><a class="btn btn-danger" href="../../controladores/srv_eliminar_ordenTrabajo.php?codigo=<?php echo $ver[0]; ?>">X</a></td>
												</tr>
											<?php } ?>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<a href="../frm_insert_ordenTrabajo.php" class="btn btn-primary">Insertar Nueva Orden</a>
										
									</div>
								</div>
							</div>
						
</body>
</html>