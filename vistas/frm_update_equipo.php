<?php 
require_once('../conexion.php'); 
$codigo=$_GET['codigo'];
$sql= "SELECT * from vta_select_equipo where vta_select_equipo.idEquipo='$codigo'";	
$result = mysqli_query($conexion,$sql);
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
	<br><br><br><br><br>
	<body align= "center">
		<?php while($ver=mysqli_fetch_array($result)){ ?>
			<form action="../controladores/srv_Actualizar_Equipo.php" method="POST">
				<div class="container-fluid">
					<div class ="row-fluid">
						<div class= "col-sm-2" >
						</div>
						<div class= "col-sm-8" > 

							<div class="card border-dark mb-3" style="width: 153%;">
								<div class="card-header">ACTUALIZAR EQUIPO</div>
								<div class="card-body text-dark">
									<p class="card-body text-secondary">
										<div class="container-fluid" style="margin-top: -4vw;">
											<div class="row">
												<div class="col-sm-12">
													<input type="hidden"  name="codigo" class=" form-control" value="<?php echo $ver[0]; ?>">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Descripcion </label><br>
													<input type="text"  name="descripcion" class=" form-control" value="<?php echo $ver[1]; ?>" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Marca:</label><br>
													<select name="marca" class="form-control" required>
														<option value="<?php echo $ver[2];?>">
															<?php echo $ver[3];?>
														</option>
														<?php while ($verm=mysqli_fetch_array($marca)) { if ( $ver[3] <> $verm[1] ){ ?>
															<option value = "<?php echo $verm[0]; ?>">
																<?php echo $verm[1]; ?>
															</option>
														<?php }} ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Modelo</label><br>
													<select name="modelo" class="form-control" required>
														<option value="<?php echo $ver[4];?>">
															<?php echo $ver[5];?>
														</option>
														<?php while ($vermo=mysqli_fetch_array($modelo)) { if ( $ver[5] <> $vermo[1] ){ ?>
															<option value = "<?php echo $vermo[0]; ?>">
																<?php echo $vermo[1]; ?>
															</option>
														<?php }} ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>estado :</label><br>
													<select name="estado" class="form-control" required>
														<option value="<?php echo $ver[6];?>">
															<?php echo $ver[7];?>
														</option>
														<?php while ($vere=mysqli_fetch_array($estado)) { if ( $ver[7] <> $vere[1] ){ ?>
															<option value = "<?php echo $vere[0]; ?>">
																<?php echo $vere[1]; ?>
															</option>
														<?php }} ?>
													</select>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Fecha Ingreso</label><br>
													<input type="date"  name="fechaingreso" value="<?php echo $ver[8]; ?>" class=" form-control">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Costo</label><br>
													<input type="text"  name="costo" value="<?php echo $ver[9]; ?>" class=" form-control">
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
		<?php } ?>
	</body>
	</html>




	