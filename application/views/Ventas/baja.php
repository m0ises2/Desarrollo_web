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
							<h2>Medicamentos a dar de baja</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
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
					<br>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<div class="row">
						<div class="large-4 medium-6 small-12 columns">
							<fieldset style="border-color:#12853A;">
								<legend>Lamisil</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Laboratorio: Novatis</label>
										<label>Presentación: crema</label>
										<br>
										<label>Cantidad</label>
										<input type="text" name="cant1" value="1" required />
										<label>Causa</label>
										<select name="causa1" required />
											<option value="Robo">Robo</option>
											<option value="Perdida">Pérdida</option>
											<option value="Apropiacion indebida">Apropiación indebida</option>
											<option value="Destrucción">Destrucción</option>
											<option value="Deterioro">Deterioro</option>
											<option value="Otras causas">Otras causas</option>
										</select>
										<label>Código del lote</label>
										<select name="cod_lote1" required />
											<option value="001">001</option>
											<option value="007">007</option>
											<option value="017">017</option>
										</select>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="large-4 medium-6 small-12 columns">
							<fieldset style="border-color:#12853A;">
								<legend>Xolair</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Laboratorio: Novatis</label>
										<label>Presentación: vacuna</label>
										<br>
										<label>Cantidad</label>
										<input type="text" name="cant2" value="1" required />
										<label>Causa</label>
										<select name="causa2" required />
											<option value="Robo">Robo</option>
											<option value="Perdida">Pérdida</option>
											<option value="Apropiacion indebida">Apropiación indebida</option>
											<option value="Destrucción">Destrucción</option>
											<option value="Deterioro">Deterioro</option>
											<option value="Otras causas">Otras causas</option>
										</select>
										<label>Código del lote</label>
										<select name="cod_lote2" required />
											<option value="003">003</option>
											<option value="011">011</option>
										</select>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="large-4 medium-6 small-12 columns">
							<fieldset style="border-color:#12853A;">
								<legend>Zinforo</legend>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Laboratorio: AstraZeneca</label>
										<label>Presentación: polvo</label>
										<br>
										<label>Cantidad</label>
										<input type="text" name="cant3" value="1" required />
										<label>Causa</label>
										<select name="causa3" required />
											<option value="Robo">Robo</option>
											<option value="Perdida">Pérdida</option>
											<option value="Apropiacion indebida">Apropiación indebida</option>
											<option value="Destrucción">Destrucción</option>
											<option value="Deterioro">Deterioro</option>
											<option value="Otras causas">Otras causas</option>
										</select>
										<label>Código del lote</label>
										<select name="cod_lote3" required />
											<option value="002">002</option>
											<option value="013">013</option>
											<option value="019">019</option>
											<option value="019">023</option>
											<option value="019">030</option>
										</select>
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
