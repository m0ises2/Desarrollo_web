<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
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
							<img src="img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Modificar</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="img/logo.png" width="50%" height="50%">
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
													<a href="#" class="round alert button expand" style="color:white;">Buscar</a>
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
												<li><label>Sesión</label></li>
												<li><a href="">Cerrar sesión</a></li>
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
						<div class="large-6 medium-9 small-centered columns" align="center">
							<fieldset style="border-color:#12853A;">
								<legend>Información</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Nombre</label>
										<input type="text" name="nom" value="Supradin" required />
										<label>Laboratorio</label>
										<input type="text" name="lab" value="Bayer" required />
										<label>Presentación</label>
										<input type="text" name="pres" value="tabletas" required />
										<div class="row">
											<div class="large-4 medium-4 small-4 columns">
												<label>stock_min</label>
												<input type="text" name="smin" value="10" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>stock_max</label>
												<input type="text" name="smax" value="120" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>Precio (Bs. F)</label>
												<input type="text" name="precio" value="499,95" required />
											</div>
										</div>
										<br>
										<p><strong>Principio(s) activo(s)</strong></p>
										<br>
										<div class="row">
											<div class="large-8 medium-8 small-8 columns">
												<label>nombre</label>
												<input type="text" name="p1nom" value="Fósforo" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>masa (mg)</label>
												<input type="text" name="p1masa" value="62,5" required />
											</div>
										</div>
										<div class="row">
											<div class="large-8 medium-8 small-8 columns">
												<label>nombre</label>
												<input type="text" name="p2nom" value="Sulfato de manganeso" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>masa (mg)</label>
												<input type="text" name="p2masa" value="0,5" required />
											</div>
										</div>
										<div class="row">
											<div class="large-8 medium-8 small-8 columns">
												<label>nombre</label>
												<input type="text" name="p3nom" value="" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>masa (mg)</label>
												<input type="text" name="p3masa" value="" required />
											</div>
										</div>
										
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
							<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Procesar">
						</div>
					</div>
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