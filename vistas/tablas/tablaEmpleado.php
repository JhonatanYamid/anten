<!DOCTYPE html>
<html>
<head>
	<title>Empleado</title>
	<link rel= "stylesheet" type ="text/css" href="../../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../../css/bootstrap.css">
	<script src="../../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<?php require_once('../../conexion.php'); 
	$sql= "SELECT * from vta_select_empleado";
	$result = mysqli_query($conexion,$sql); 
	?>
</head>
<body style="margin: 2vw;">
	<br>
	<br>
	<h4 style="color:#777;">EMPLEADO</h4>
	<br>
	<br>
	<div class="container-fluid"  >
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-condensed">
					<tr>
						<td>Documento</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>Celular</td>
						<td>Correo</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
					<?php 

					$co=0;
					while($ver=mysqli_fetch_row($result)){ 
						$co++;
						?>
						<tr>
							<td><?php echo $ver[0]; ?></td>
							<td><?php echo $ver[1]; ?></td>
							<td><?php echo $ver[2]; ?></td>
							<td><?php echo $ver[3]; ?></td>
							<td><?php echo $ver[4]; ?></td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalupdate<?php echo $co ?>">♦</button>

								<!-- Modal -->
								<div class="modal fade" id="Modalupdate<?php echo $co ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $co ?>" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel<?php echo $co ?>">Editar Empleado</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<br>
												<form action="../../controladores/srv_Actualizar_Empleado.php" method="POST">
													<div class="container-fluid" style="margin-top: -4vw;">
														<div class="row">
															<div class="col-sm-12">
																<input type="hidden"  name="codigo" class=" form-control" value="<?php echo $ver[0]; ?>">
																<br>
															</div>
															<div class="col-sm-6">
																<label>Nombres:</label><br>
																<input type="text"  name="nombres" class=" form-control" value="<?php echo $ver[1]; ?>" required>
																<br>
															</div>
															<div class="col-sm-6">
																<label>Apellidos:</label><br>
																<input type="text"  name="apellidos" value="<?php echo $ver[2]; ?>" class=" form-control" required>
																<br>
															</div>
															<div class="col-sm-6">
																<label>Celular:</label><br>
																<input type="text"  name="celular" value="<?php echo $ver[3]; ?>" class=" form-control" required>
																<br>
															</div>
															<div class="col-sm-6">
																<label>Correo:</label><br>
																<input type="text"  name="correo" value="<?php echo $ver[4]; ?>" class=" form-control" required>
																<br>
															</div>
															<div class="col-sm-12">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
																<button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

							</td>
							<td><a class="btn btn-danger" href="../../controladores/srv_eliminar_empleado.php?codigo=<?php echo $ver[0]; ?>">X</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalinsertar">
					Insertar Empleado
				</button>

				<!-- Modal -->
				<div class="modal fade" id="Modalinsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="../../controladores/srv_insertar_empleado.php" name="form2ac" method="POST">
									<div class="container-fuid">
										<div class="row">
											<div class="col-sm-12">
												<label>Documento:</label><br>
												<input type="text"  name="docid" placeholder="Documento del Empleado" class=" form-control" value="" required>
												<br>
											</div>
											<div class="col-sm-6">
												<label>Nombres:</label><br>
												<input type="text"  name="nombres" class=" form-control" placeholder="nombres del empleado" required>
												<br>
											</div>
											<div class="col-sm-6">
												<label>Apellidos:</label><br>
												<input type="text"  name="apellidos" placeholder="Apellidos del empleado" class=" form-control" required>
												<br>
											</div>
											<div class="col-sm-6">
												<label>Celular:</label><br>
												<input type="text"  name="celular" placeholder="Celular del empleado" class=" form-control" required>
												<br>
											</div>
											<div class="col-sm-6">
												<label>Correo:</label><br>
												<input type="text"  name="correo" placeholder="Correo del empleado" class=" form-control" required>
												<br>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
										<button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>