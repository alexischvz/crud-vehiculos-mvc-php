<!DOCTYPE html>
<html lang="es">

<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="resources/icon/icon.css">
</head>

<body>

	<header>

		<div class="container mb-5">

			<h1 class="display-4 text-center">Nomina de Vehiculos</h1>
			
		</div>
		
	</header>

	<section>

		<div class="container">

			<div class="row">
				<table class="table table-hover table-sm text-center">

					<thead>
						<tr>
							<th>Id</th>
							<th>Marca</th>
							<th>Tipo</th>
							<th>Caja</th>
							<th>Motor</th>
							<th>Color</th>
							<th>Modelo</th>
							<th></th>
						</tr>
					</thead>

					<?php 
					foreach ($this->modelo->readVehiculos() as $rv) { ?>

						<tbody>
							<tr>
								<td><?= $rv->id_registrov ?></td>
								<td><?= $rv->marca ?></td>
								<td><?= $rv->tipo ?></td>
								<td><?= $rv->caja ?></td>
								<td><?= $rv->motor ?></td>
								<td><?= $rv->color ?></td>
								<td><?= $rv->modelo ?></td>
								<td>
									<a href="#" onclick="del(<?= $rv->id_registrov ?>);" class="btn btn-sm btn-danger icon-bin"></a>
									<a href="?c=modificar&id_registro=<?= $rv->id_registrov ?>" class="btn btn-sm btn-info icon-pencil"></a>
								</td>
							</tr>
						</tbody>
					 	
					<?php } ?>
				
				</table>
			</div>

			<div class="row">
				
				<a href="?c=registro" class="btn btn-secondary btn-sm">Nuevo Vehiculo</a>

			</div>
			
		</div>
		
	</section>

	<footer>
		
	</footer>

	<script type="text/javascript" src="resources/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="resources/js/alertify.js"></script>
	<script>
		
		function del(id_r){
			alertify.confirm('Eliminar Registro', 'Está seguro de eliminar el registro?', function(){ 
				window.location = "?c=delete&id_registro=" + id_r;
			}, 
			function(){ 
				alertify.error('Cancelado')
			});
		}

	</script>

</body>

</html>