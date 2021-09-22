<?php 
require_once('../conexion.php'); 
$codigo=$_GET['codigo'];
$sql= "SELECT * from vta_select_empleado where vta_select_empleado.codigo='$codigo'";	
$result = mysqli_query($conexion,$sql);
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
			<form action="../controladores/srv_Actualizar_Empleado.php" method="POST">
				<div class="container-fluid">
					<div class ="row-fluid">
						<div class= "col-sm-2" >
						</div>
						<div class= "col-sm-8" > 

							<div class="card border-dark mb-3" style="width: 153%;">
								<div class="card-header">ACTUALIZAR EMPLEADO</div>
								<div class="card-body text-dark">
									<p class="card-body text-secondary">
										<div class="container-fluid" style="margin-top: -4vw;">
											<div class="row">
												<div class="col-sm-12">
													<input type="hidden"  name="codigo" class=" form-control" value="<?php echo $ver[0]; ?>">
													<br>
												</div>
												<div class="col-sm-6">
													<label>Nombres </label><br>
													<input type="text"  name="nombres" class=" form-control" value="<?php echo $ver[1]; ?>" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Apellidos</label><br>
													<input type="text"  name="apellidos" value="<?php echo $ver[2]; ?>" class=" form-control" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Celular</label><br>
													<input type="text"  name="celular" value="<?php echo $ver[3]; ?>" class=" form-control" required>
													<br>
												</div>
												<div class="col-sm-6">
													<label>Correo</label><br>
													<input type="text"  name="correo" value="<?php echo $ver[4]; ?>" class=" form-control" required>
													<br>
												</div>
												<div class="col-sm-12">
													<button type="button" class="btn btn-secondary">Cerrar</button>
													<button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
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




	