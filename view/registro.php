<!DOCTYPE html>
<html lang="es">

<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/icon/icon.css">
</head>

<body>

	<header>

		<div class="container mt-5 mb-5">

			<h2 class="text-center">Registro de Vehiculos</h2>
			
		</div>
		
	</header>

	<section>

		<div class="container">

			<div class="row">

				<div class="col-8 offset-2">

					<div class="card">

						<div class="card-header">
							<h6 class="card-title text-center">Rellene los campos</h6>
						</div>

						<form action="?c=create" method="post">

							<div class="card-body">

								<div class="row">									
									<div class="form-group col-4">
										
										<label>Marca de Vehiculo</label>
										<select name="marca" class="custom-select custom-select-sm">
											<option>Seleccione...</option>
											<?php 
											foreach ($this->modelo->readMarca() as $rm) { ?>

												<option value="<?= $rm->id_marca ?>">

													<?= $rm->marca ?>
													
												</option>
											 	
											<?php } ?>
											
										</select>
										
									</div>

									<div class="form-group col-4">
										
										<label>Tipo de Vehiculo</label>
										<select name="tipo" class="custom-select custom-select-sm">
											<option>Seleccione...</option>
											<?php 
											foreach ($this->modelo->readTipo() as $rt) { ?>

												<option value="<?= $rt->id_tipo ?>">

													<?= $rt->tipo ?>
													
												</option>
											 	
											<?php } ?>
											
										</select>
										
									</div>

									<div class="form-group col-4">
										
										<label>Caja de Cambios</label>
										<select name="caja" class="custom-select custom-select-sm">
											<option>Seleccione...</option>
											<?php 
											foreach ($this->modelo->readCaja() as $rc) { ?>

												<option value="<?= $rc->id_caja ?>">

													<?= $rc->caja ?>
													
												</option>
											 	
											<?php } ?>
											
										</select>
										
									</div>
								</div>

								<div class="row">									
									<div class="form-group col-12">
										
										<label>Motor de Vehiculo</label>
										<input type="text" name="motor" class="form-control form-control-sm">
										
									</div>
								</div>

								<div class="row">									
									<div class="form-group col-6">
										
										<label>Color de Vehiculo</label>
										<input type="text" name="color" class="form-control form-control-sm">
										
									</div>

									<div class="form-group col-6">
										
										<label>Modelo de Vehiculo</label>
										<input type="text" name="modelo" class="form-control form-control-sm">
										
									</div>
								</div>
								
							</div>

							<div class="card-footer">

								<div class="row">

									<div class="btn-group ml-3">

										<input type="submit" value="RegistrarVehiculo" class="btn btn-sm btn-success">
										<a href="?c=index" class="btn btn-danger btn-sm">Regresar</a>
										
									</div>
									
								</div>
								
							</div>
							
						</form>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</section>

	<footer>
		
	</footer>

</body>

</html>