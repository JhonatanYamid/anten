<!DOCTYPE html>
<html>
<head>
	<title>Equipo</title>
	<link rel= "stylesheet" type ="text/css" href="../../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../../css/bootstrap.css">
	<script src="../../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">

	<?php require_once('../../conexion.php');
	$sql= "SELECT * FROM vta_select_equipo";
	$result = mysqli_query($conexion,$sql);
	?>
</head>
<body style="margin: 2vw;">
	<br>
	<br>
	<h4 style="color:#777;">EQUIPO</h4>
	<br>
	<br>
	<div class="container-fluid"  >
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-condensed">
					<tr>
						<td>Codigo</td>
						<td>Descripcion</td>
						<td>Marca</td>
						<td>Modelo</td>
						<td>Estado</td>
						<td>Fecha Ingreso</td>
						<td>Costo</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
					<?php while($ver=mysqli_fetch_row($result)){ ?>
						<tr>
							<td><?php echo $ver[0]; ?></td>
							<td><?php echo $ver[1]; ?></td>
							<td><?php echo $ver[3]; ?></td>
							<td><?php echo $ver[5]; ?></td>
							<td><?php echo $ver[7]; ?></td>
							<td><?php echo $ver[8]; ?></td>
							<td><?php echo $ver[9]; ?></td>
							<td><a class="btn btn-primary" href="../../vistas/frm_update_equipo.php?codigo=<?php echo $ver[0]; ?>">♦</a></td>
							<td><a class="btn btn-danger" href="../../controladores/srv_eliminar_equipo.php?codigo=<?php echo $ver[0]; ?>">X</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="../frm_insert_equipo.php" class="btn btn-primary">Insertar Equipo</a>
			</div>
		</div>
	</div>
	
</body>
</html>