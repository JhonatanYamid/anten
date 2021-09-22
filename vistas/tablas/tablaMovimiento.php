<!DOCTYPE html>
<html>
<head>
	<title>Movimiento</title>
	<link rel= "stylesheet" type ="text/css" href="../../css/estilos.css">
	<link rel= "stylesheet" type ="text/css" href="../../css/bootstrap.css">
	<script src="../../js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">

	<?php require_once('../../conexion.php'); 
	$sql= "SELECT * from vta_select_movimiento";
	$result = mysqli_query($conexion,$sql); 
	?>
</head>
<body style="margin: 2vw;">
	<br>
	<br>
	<h4 style="color:#777;">MOVIMIENTO</h4>
	<br>
	<br>
	<div class="container-fluid"  >
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-condensed ">
					<tr>
						<td>Codigo</td>
						<td>Fecha de Entrada</td>
						<td>Fecha de Salida</td>
						<td>Equipo</td>
						<td>Observaciones</td>
						<td>Empleado</td>
						<td>Estado</td>
						<td>Orden de Trabajo</td>
						<td>Tipo Daño</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
					<?php while($ver=mysqli_fetch_row($result)){ ?>
						<tr>
							<td><?php echo $ver[0]; ?></td>
							<td><?php echo $ver[1]; ?></td>
							<td><?php echo $ver[2]; ?></td>
							<td><?php echo $ver[4]; ?></td>
							<td><?php echo $ver[5]; ?></td>
							<td><?php echo $ver[7].' '.$ver[8]; ?></td>
							<td><?php echo $ver[10]; ?></td>
							<td><?php echo $ver[12]; ?></td>
							<td><?php echo $ver[13]; ?></td>
							<td><a class="btn btn-primary" href="../../vistas/frm_update_movimiento1.php?codigo=<?php echo $ver[0]; ?>">♦</a></td>
							<td><a class="btn btn-danger" href="../../controladores/srv_eliminar_movimiento1.php?codigo=<?php echo $ver[0]; ?>">X</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<a href="../frm_insert_movimiento.php" class="btn btn-primary">Insertar Movimiento</a>
			</div>
		</div>
	</div>
</p>

</body>
</html>