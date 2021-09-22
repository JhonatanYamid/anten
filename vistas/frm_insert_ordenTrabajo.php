<?php 
require_once('../conexion.php'); 
$idempleado= "SELECT * FROM tblempleado";
$idequipo= "SELECT * FROM tblequipo";
$idestado= "SELECT * FROM tblestado";
$empleado = mysqli_query($conexion, $idempleado);
$estado = mysqli_query($conexion, $idestado);
$equipo = mysqli_query($conexion, $idequipo);

?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>OrdenTrabajo</title>
	<link rel= "stylesheet" type ="text/css" href="../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
</head>
<body align= "center">
	<br><br><br>
	<body align= "center">
		<form action="../controladores/srv_insertar_OrdenTrabajo.php" method="POST">
			<div class="container-fluid">
				<div class ="row-fluid">
					<div class= "col-sm-2" >
					</div>
					<div class= "col-sm-8" > 

						<div class="card border-dark mb-3" style="width: 153%;">
							<div class="card-header">INSERTAR ORDEN DE TRABAJO</div>
							<div class="card-body text-dark">
								<p class="card-body text-secondary">
									<div class="container-fluid" style="margin-top: -4vw;">
										<div class="row">
											<div class="col-sm-6">
												<label>Descripcion: </label><br>
												<input type="text"  name="descripcion" class="form-control" required>
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
											<div class="col-sm-6">
												<label>Fecha Orden:</label><br>
												<input type="date"  name="fechaOrden" class="form-control" required>
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
											<div class="col-sm-12">
												<button type="submit" name="enviar" class="btn btn-primary btn-lg">Enviar</button>
												<a href="tablas/tablaEquipo.php" class="btn btn-danger btn-lg">Salir</a>
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
	</body>
	</html>




	