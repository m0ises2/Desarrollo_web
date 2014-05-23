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

		<script type="text/javascript">
			function agregar_compuesto(texto)
			{
				 document.getElementById("principio").innerHTML += "<br>" + texto;
			}
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
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Nuevo medicamento</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
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
									<ul class="left">
										<li class="divider" style="width:15px;"></li>
										<li class="has-dropdown">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Búsqueda avanzada</a></li>
												<li><a href="">Nuevo medicamento</a></li>
												<li><label>Para los seleccionados</label></li>
												<li><a href="">Nuevo lote</a></li>
												<li><a href="">Modificar</a></li>
												<li><a href="">Dar de baja</a></li>
												<li><a href="">Traspaso</a></li>												
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
					
					<!--INICIO DEL CUERPO-->
					<div class="row">
						<form method="POST" action="#">
							<div class="large-8 medium-10 small-centered columns" align="center">
								<fieldset style="border-color:#12853A;">
									<legend>Información:</legend>
									<div class="row">
										<div class="large-12 medium-12 small-12 columns" align="left">
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<label>Nombre:</label>
													<input type="text" name="nom" pattern = "[aA-zZ]+" required />
												</div>
											</div>
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<label>Laboratorio:</label>
													<input type="text" name="lab" pattern = "[aA-zZ]+" required />
												</div>
											</div>
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<label>Presentación:</label>
													<input type="text" name="pres" pattern = "[aA-zZ]+" required />
												</div>
											</div>
											<div class="row">
												<div class="large-4 medium-4 small-4 columns">
													<label>stock_min:</label>
													<input type="text" name="smin" pattern = "[0-9]+" required />
												</div>
												<div class="large-4 medium-4 small-4 columns">
													<label>stock_max:</label>
													<input type="text" name="smax" pattern = "[0-9]+" required />
												</div>
												<div class="large-4 medium-4 small-4 columns">
													<label>Precio (Bs. F):</label>
													<input type="text" name="precio" pattern = "[0-9]+" required />
												</div>
											</div>
											<br>
											<br>
											<p><strong>Principio(s) activo(s):</strong></p>
											<div id="principio" class="row">
												<div class="large-8 medium-8  small-8  columns">
													<label>nombre</label>
													<input type="text" name="p1nom" required />
												</div>
												<div class="large-4 medium-4 small-4 columns">
													<label>masa (mg)</label>
													<input type="text" name="p1masa" required />
												</div>
											</div>
											<div class = "row">
												<div class="large-4 medium-4 small-4 columns" align: "left">
													<input type="button" value="otro" onClick="agregar_compuesto('<a>sexo</a>')">										
												</div>
											</div>
											<br>
											<br>
											<p><strong>Información para el lote:</strong></p>
											<div class="row">
												<div class="large-2 medium-2 small-3 columns">
													<label>Lote:</label>
													<input type="text" name="cant" pattern = "[0-9]+" required />
												</div>
												<div class="large-2 medium-2 small-3 columns">
													<label>Cantidad:</label>
													<input type="text" name="cant" pattern = "[0-9]+" required />
												</div>
												<div class="large-4 medium-4 small-3 columns">
													<label>Elaboración:</label>
													<input type="text" id="datepicker1" name="fecha_e" required />
												</div>
												<div class="large-4 medium-4 small-3 columns">
													<label>Vencimiento:</label>
													<input type="text" id="datepicker2" name="fecha_v" required />
												</div>
											</div>
											
										</div>
									</div>
								</fieldset>
							</div>
						</div>
						
						<br>
						<br>
						<div class="row">
							<div class="large-12 columns">
								<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Volver</a>
								<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Procesar">
							</div>
						</div>
						<br>
						<br>
					</form>
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
