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
							<h2>Traspaso de medicamentos</h2>
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
												<li><label>Para los seleccionados</label></li>
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
						<div class="large-6 medium-9 small-12 columns" align="center">
							<fieldset style="border-color:#12853A;">
								<legend>Brugesic</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Laboratorio: Elmor</label>
										<label>Presentación: tabletas</label>
										<br>
										<label>Cantidad a ceder</label>
										<input type="text" name="cant1" value="1" required />
										<label>Código del lote</label>
										<select name="cod_lote1" required />
											<option value="020">020</option>
											<option value="030">030</option>
											<option value="041">041</option>
										</select>
										<label>Unidad cedente</label>
										<select name="uc1" required />
											<option value="Inventario Principal">Inventario Principal</option>
											<option value="Inventario Unidosis">Inventario Unidosis</option>
										</select>
										<label>Unidad destino</label>
										<select name="ud1" required />
											<option value="Inventario Principal">Inventario Principal</option>
											<option value="Inventario Unidosis">Inventario Unidosis</option>
											<option value="Venta al Público">Venta al Público</option>
										</select>
										<label>Observaciones</label>
										<textarea name="obs1" style="height:110px; resize:none;" required></textarea>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
					
					<div class="row">
						<div class="large-6 medium-9 small-12 columns">
							<fieldset style="border-color:#12853A;">
								<legend>Tegretol</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Laboratorio: Novatis</label>
										<label>Presentación: comprimidos</label>
										<br>
										<label>Cantidad a ceder</label>
										<input type="text" name="cant2" value="1" required />
										<label>Código del lote</label>
										<select name="cod_lote2" required />
											<option value="004">004</option>
											<option value="010">010</option>
										</select>
										<label>Unidad cedente</label>
										<select name="uc2" required />
											<option value="Inventario Principal">Inventario Principal</option>
											<option value="Inventario Unidosis">Inventario Unidosis</option>
										</select>
										<label>Unidad destino</label>
										<select name="ud2" required />
											<option value="Inventario Principal">Inventario Principal</option>
											<option value="Inventario Unidosis">Inventario Unidosis</option>
											<option value="Venta al Público">Venta al Público</option>
										</select>
										<label>Observaciones</label>
										<textarea name="obs2" style="height:110px; resize:none;" required></textarea>
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
