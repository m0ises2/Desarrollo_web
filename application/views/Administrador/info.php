<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/foundation.css" />
		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo site_url();?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Stock de productos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url();?>assets/img/logo.png" width="50%" height="50%">
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
						<div class="large-6 medium-6 small-centered columns">
							<fieldset style="border-color:#12853A;" style="align:left">
								<legend><h4><b>Información</b></h4></legend>
								<?php
									foreach( $medicamento->result() as $fila )
									{
										echo "<b>Nombre:</b> ".$fila->nombre."<br>";
										echo "<b>Laboratorio:</b> ".$fila->laboratorio."<br>";
										echo "<b>Presentación:</b> ".$fila->presentacion."<br><br>";
									}
									echo "<h5><b>Principio(s) activo(s)</b></h5><br>";
									$i = 1;
									foreach($principio->result() as $fila2)
									{
										echo "<b>Principio #".$i .":</b><br>". $fila2->nombre . " <br><br><b>Miligramos: </b> <br>" . $fila2->cant_miligramos." mlgr.<br><br>";
										$i++;
									}
								?>							
								
							</fieldset>
						</div>
					</div>
					
					<br>
					<br>
					<!--FIN DEL CUERPO-->
					<div class="row">
						<div class="small-12 medium-12 large-12 columns" align="center">
							<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Volver</a>
						</div>
					</div>
					
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
