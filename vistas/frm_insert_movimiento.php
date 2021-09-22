
<?php 
require_once('../conexion.php');
$idtipodagno= "SELECT * FROM tbltipodagno ORDER BY codigo";
$idempleado= "SELECT * FROM tblempleado";
$idestado= "SELECT * FROM tblestado";
$idequipo= "SELECT * FROM tblequipo";
$idordentrabajo="SELECT * FROM tblordentrabajo";
$tipodagno = mysqli_query ($conexion, $idtipodagno);
$empleado = mysqli_query($conexion, $idempleado);
$estado = mysqli_query($conexion, $idestado);
$equipo = mysqli_query($conexion, $idequipo);
$ordentrabajo = mysqli_query($conexion, $idordentrabajo)
?>
<!DOCTYPE html>
<html>
<head>
	<title>vehiculo</title>
	<link rel= "stylesheet" type ="text/css" href="../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
</head>
<body align= "center">
	<br><br>
	
		<br>
		<div class="container-fluid">
			<div class ="row-fluid">
				<div class= "col-sm-2" >
				</div>
				<div class= "col-sm-8" > 

					<div class="card border-dark mb-3" style="width: 153%;">
						<div class="card-header">INSERTAR MOVIMIENTO</div>
						<div class="card-body text-dark">
							<p class="card-body text-secondary">
								<form action="../controladores/srv_insertar_movimiento.php" name="forminsert" method="POST">
								<div class="container-fuid" style="margin-top: -4vw;">
									<div class="row">
										<div class="col-sm-6">
											<label>Fecha de Entrada: </label><br>
											<input type="date"  name="fechaentrada" class=" form-control"  required>
											<br>
										</div>
										<div class="col-sm-6">
											<label>Fecha de Salida:</label><br>
											<input type="date"  name="fechasalida"  class=" form-control" required>
											<br>
										</div>
										<div class="col-sm-6">
											<label>Empleado:</label><br>
											<select name="empleado" class="form-control"  required>
												<option value="">Seleccione</option>
												<?php while ($verm=mysqli_fetch_array($empleado)) {?>
													<option value = "<?php echo $verm[0]; ?>">
														<?php echo $verm[1].' '.$verm[2]; ?>
													</option>
												<?php } ?>
											</select>
											<br>
										</div>
										<div class="col-sm-6">
											<label>Equipo:</label><br>
											<select name="equipo" class="form-control"  required>
												<option value="">Seleccione</option>
												<?php while ($vere=mysqli_fetch_array($equipo)){ ?>
													<option value = "<?php echo $vere[0]; ?>">
														<?php echo $vere[1]; ?>
													</option>
												<?php } ?>
											</select>
											<br>
										</div>
										<div class="col-sm-4">
											<label>Tipo de Daño: </label><br>
											<select name="tipodagno" class="form-control"  required>
												<option value="">Seleccione</option>
												<?php while ($verp = mysqli_fetch_array($tipodagno)){?>
													<option value="<?php echo $verp[0];?>">
														<?php echo $verp[1];?>
													</option>
												<?php } ?>
											</select>
											<br>
										</div>
										<div class="col-sm-4">
											<label>Estado:</label><br>
											<select name="estado" class="form-control" required>
												<option value="">Seleccione</option>
												<?php while ($vera=mysqli_fetch_array($estado)){ ?>
													<option value = "<?php echo $vera[0]; ?>">
														<?php echo $vera[1]; ?>
													</option>
												<?php } ?>
											</select>
											<br>
										</div>
										<div class="col-sm-4">
											<label>Orden de Trabajo:</label>
											<select name="ot" class="form-control"  required>
												<option value="">Seleccione</option>
												<?php while ($vert=mysqli_fetch_array($ordentrabajo)){ ?>
													<option value = "<?php echo $vert[0]; ?>">
														<?php echo $vert[1]; ?>
													</option>
												<?php } ?>
											</select>
											<br>
										</div>
										<div class="col-sm-12">
											<textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Observaciones del movimiento"></textarea>
											<br>
										</div>
										<div class="col-sm-6" style="margin-bottom: -2vw;">
											<input type="submit" name="ENVIAR" class="btn btn-primary btn-lg btn-block">
											<br>
										</div>
										<div class="col-sm-6" style="margin-bottom: -2vw;">
											<a href="tablas/tablaMovimiento.php" class="btn btn-danger btn-lg btn-block">Cancelar</a>
											<br>
										</div>
									</div>
								</div>
							</form>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>