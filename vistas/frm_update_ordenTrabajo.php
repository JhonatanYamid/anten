<?php 
require_once('../conexion.php'); 
$codigo=$_GET['codigo'];
$sql= "SELECT * from vta_select_ordentrabajo where vta_select_ordentrabajo.codigo='$codigo'";	
$result = mysqli_query($conexion,$sql);
$idempleado= "SELECT * FROM tblempleado";
$idestado= "SELECT * FROM tblestado";
$empleado = mysqli_query($conexion, $idempleado);
$estado = mysqli_query($conexion, $idestado);
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>vehiculo</title>
	<link rel= "stylesheet" type ="text/css" href="../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
</head>
<body align= "center">
	<br><br><br><br><br>
	<body align= "center">
		<?php while($ver=mysqli_fetch_array($result)){ ?>
			<form action="../controladores/srv_Actualizar_OrdenTrabajo.php" method="POST">
				<div class="container-fluid">
					<div class ="row-fluid">
						<div class= "col-sm-2" >
						</div>
						<div class= "col-sm-8" > 

							<div class="card border-dark mb-3" style="width: 153%;">
								<div class="card-header">ACTUALIZAR ORDEN DE TRABAJO</div>
								<div class="card-body text-dark">
									<p class="card-body text-secondary">
										<div class="container-fluid" style="margin-top: -4vw;">
											<div class="row">
												<div class="col-sm-12">
													<input type="hidden"  name="codigo" class=" form-control" value="<?php echo $ver[0]; ?>">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Orden de Trbajo:</label><br>
													<input type="text"  name="nombre" class=" form-control" value="<?php echo $ver[1]; ?>" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Fecha de la Orden:</label><br>
													<input type="date"  name="fechaorden" value="<?php echo $ver[2]; ?>" class=" form-control" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Empleado:</label><br>
													<select name="empleado" class="form-control"  required>
														<option value="<?php echo $ver[3];?>">
															<?php echo $ver[4].' '.$ver[5];?>
														</option>
														<?php while ($vere=mysqli_fetch_array($empleado)) { if ( ($ver[4].' '.$ver[5]) <> ($vere[1].' '.$vere[2]) ){ ?>
															<option value = "<?php echo $vere[0]; ?>">
																<?php echo $vere[1].' '.$vere[2]; ?>
															</option>
														<?php }} ?>
													</select><br>
												</div>
												<div class="col-sm-6">
													<label>Estado:</label><br>
													<select name="estado" class="form-control" required>
														<option value="<?php echo $ver[6];?>">
															<?php echo $ver[7];?>
														</option>
														<?php while ($vera=mysqli_fetch_array($estado)) { if ( $ver[7] <> $vera[1] ){ ?>
															<option value = "<?php echo $vera[0]; ?>">
																<?php echo $vera[1]; ?>
															</option>
														<?php }} ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6" style="margin-bottom: -2vw;">
													<input type="submit" name="ENVIAR" class="btn btn-primary btn-lg btn-block">
													<br>
												</div>
												<div class="col-sm-6" style="margin-bottom: -2vw;">
													<a href="tablas/tablaOrdenTrabajo.php" class="btn btn-danger btn-lg btn-block">Cancelar</a>
													<br>
												</div>
											</div>
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		<?php } ?>
	</body>
	</html>




	