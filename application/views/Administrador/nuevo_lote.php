<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo site_url()?>assets/css/foundation.css" />
		<link rel="stylesheet" href="<?php echo site_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo site_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/themes/smoothness/jquery-ui.css" />
		<script src="<?php echo site_url()?>assets/js/jquery/jquery-1.11.1.js"></script>
		<script src="<?php echo site_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo site_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>

		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		<script>
			$(function () {
				$("#datepicker1").datepicker({
				onClose: function (selectedDate) {
				$("#datepicker2").datepicker("option", "minDate", selectedDate);
				}
				});
				$("#datepicker2").datepicker({
				onClose: function (selectedDate) {
				$("#datepicker1").datepicker("option", "maxDate", selectedDate);
				}
				});
			});
		</script>
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo site_url(); ?>/assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Nuevo lote para...</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url(); ?>/assets/img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<!-- BARRA -->
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<nav class="top-bar" data-topbar>
								<section class="top-bar-section">
									<!-- Right Nav Section -->
									<ul class="right">
										<li class="has-form">
											<div class="row collapse">
												<div class="large-8 small-9 columns">
													<input type="text" placeholder="Inserte su texto" style="height:31px;">
												</div>
												<div class="large-4 small-3 columns">
													<a href="#" class="round alert button expand" style="color:white; background-color:#12853A;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left" style="margin-left:15px">
										<li class="has-dropdown">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Búsqueda avanzada</a></li>
												<li><a href="">Nuevo medicamento</a></li>
																							
											</ul>
										</li>
									</ul>
								</section>
							</nav>
							
							<br>
							<br>
							<br>
							
						</div>
					</div>
					<!-- FIN DE BARRA -->
					<br>
					<!--FIN DEL HEADER-->
					
					<?php
						foreach ($medicamento->result() as $fila) {
							echo $fila->nombre ." - ". $fila->laboratorio ." - ". $fila->presentacion;
						}
					?>
					<br>
					<!--INICIO DEL CUERPO-->
					<form method='POST' action="<?php echo site_url()?>lotes/agregar_lote">
					<div class="row">
						<div class="large-8 medium-8 small-12 small-centered columns" align="center">
							<fieldset style="border-color:#12853A;">
								<legend>Información</legend>
								<div class="row">
											<div class="large-4 medium-4 small-3 columns">
												<label>Número de lote</label>
												<input type="text" name="num_lote" pattern = "[1-9]+[0-9]*" required />
												<input name="codigo" value="<?php echo $codigo;?>" type="hidden">
											</div>
											<div class="large-2 medium-2 small-3 columns">
												<label>Cantidad</label>
												<input type="text" name="cant" pattern = "[1-9]+[0-9]*" required value='1'/>
											</div>
											<div class="large-3 medium-3 small-3 columns">
												<label>Fecha de elav.</label>
												<input type="text" id="datepicker1" name="fecha_e" required placeholder='Mes/Dia/Año' readonly="readonly" />
											</div>
											<div class="large-3 medium-3 small-3 columns">
												<label>Fecha de ven.</label>
												<input type="text" id="datepicker2" name="fecha_v" required placeholder='Mes/Dia/Año' readonly="readonly" />
											</div>
									</div>
							</fieldset>
						</div>
					</div>
					
					<br>
					<br>
					<br>
					<div class="row">
						<div class="large-12 columns">
							<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Volver</a>
							<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Procesar">
						</div>
					</div>
				</form>
					<br>
					<br>
					<!--FIN DEL CUERPO-->
					
					
				</div>
			</div>
		</div>
		
		
		
		<?php #require("template/footer.php"); ?>
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
