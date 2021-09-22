<?php 
require_once('../conexion.php'); 
$idestado= "SELECT * FROM tblestado";
$idmarca= "SELECT * FROM tblmarca";
$idmodelo= "SELECT * FROM tblmodelo";
$estado = mysqli_query($conexion, $idestado);
$marca = mysqli_query($conexion, $idmarca);
$modelo = mysqli_query($conexion, $idmodelo);
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Equipo</title>
	<link rel= "stylesheet" type ="text/css" href="../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
</head>
<body align= "center">
	<br><br><br>
	<body align= "center">
			<form action="../controladores/srv_insertar_Equipo.php" method="POST">
				<div class="container-fluid">
					<div class ="row-fluid">
						<div class= "col-sm-2" >
						</div>
						<div class= "col-sm-8" > 

							<div class="card border-dark mb-3" style="width: 153%;">
								<div class="card-header">INSERTAR EQUIPO</div>
								<div class="card-body text-dark">
									<p class="card-body text-secondary">
										<div class="container-fluid" style="margin-top: -4vw;">
											<div class="row">
												<div class="col-sm-12">
													<label>Codigo</label><br>
													<input type="text"  name="codigo" class=" form-control">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Descripcion </label><br>
													<input type="text"  name="descripcion" class="form-control" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Marca :</label><br>
													<select name="marca" class="form-control" required>
														<option value="">Seleccione</option>
														<?php while ($verm=mysqli_fetch_array($marca)){ ?>
															<option value = "<?php echo $verm[0]; ?>">
																<?php echo $verm[1]; ?>
															</option>
														<?php } ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Modelo :</label><br>
													<select name="modelo" class="form-control" required>
														<option value="">Seleccione</option>
														<?php while ($vermo=mysqli_fetch_array($modelo)){ ?>
															<option value = "<?php echo $vermo[0]; ?>">
																<?php echo $vermo[1]; ?>
															</option>
														<?php } ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>estado :</label><br>
													<select name="estado" class="form-control" required>
														<option value="">Seleccione</option>
														<?php while ($vere=mysqli_fetch_array($estado)){ ?>
															<option value = "<?php echo $vere[0]; ?>">
																<?php echo $vere[1]; ?>
															</option>
														<?php } ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Fecha Ingreso</label><br>
													<input type="date"  name="fechaingreso" class=" form-control">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Costo</label><br>
													<input type="text"  name="costo" class=" form-control">
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




	