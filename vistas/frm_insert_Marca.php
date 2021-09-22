<?php 
require_once('../conexion.php'); 
$sql= "SELECT * from tblmarca";
$result = mysqli_query($conexion,$sql); 
$idFabricante= "SELECT * FROM tblfabrica";
$fabrica=mysqli_query($conexion,$idFabricante);
?>
<!DOCTYPE html>
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
<body style="margin: 2vw;">
	<br>
	<br>
	<h4 style="color:#777;">MARCA</h4>
	<br>
	<div class="container">
		<div class ="row">
			<div class= "col-sm-6" > 
				<div class="card border-success">
					<div class="card-header">INSERTAR MARCA</div>
					<div class="card-body text-dark">
						<p class="card-body text-secondary">
							<form action="../controladores/srv_insertar_marca.php" method="POST">
								<label>Codigo</label><br>
								<input type="text"  name="codigo" class=" form-control">
								<br>

								<label>Nombre</label><br>
								<input type="text"  name="nombre" class="form-control" required>
								<br>

								<label>Fabrica:</label><br>
								<select name="fabrica" class="form-control" required>
									<option value="">Seleccione</option>
									<?php while ($verf=mysqli_fetch_array($fabrica)){ ?>
										<option value = "<?php echo $verf[0]; ?>">
											<?php echo $verf[1]; ?>
										</option>
									<?php } ?>
								</select>
								<br>

								<input type="submit" class="btn btn-primary" value="Insertar" name="ENVIAR">
							</form>
						</p>
					</div>
				</div>
			</div>
			<div class= "col-sm-6" >

				<table class="table table-hover table-condensed table-bordered ">
					<thead class="thead-dark">
						<tr>
							<th>Codigo</th>
							<th>Nombres</th>
							<th>Fabricante</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						while($ver=mysqli_fetch_row($result)){ ?>
							<tr>
								<td><?php echo $ver[0]; ?></td>
								<td><?php echo $ver[1]; ?></td>
								<td><?php echo $ver[2]; ?></td>
								<td><a class="btn btn-danger" href="../controladores/srv_eliminar_marca.php?codigo=<?php echo $ver[0]; ?>">X</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</body>
</html>




