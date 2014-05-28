<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
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
					<?php
						$titulo = "Stock de productos";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<div class="row">
						<div class="large-6 medium-6 small-centered columns">
							<fieldset style="border-color:#12853A;" style="align:left">
								<legend><h4><b>Información</b></h4></legend>
								<?php
									foreach( $medicamento->result() as $fila )
									{
										echo "<b>Nombre:</b> <span style =' font-size: 15pt;' >".$fila->nombre."</span><br>";
										echo "<b>Laboratorio:</b> <span style =' font-size: 15pt;'>".$fila->laboratorio."</span><br>";
										echo "<b>Presentación:</b> <span style =' font-size: 15pt;'>".$fila->presentacion."</span><br>";
										echo "<b>Dosis por Presentación:</b> <span style =' font-size: 15pt;'>".$fila->dosis."</span><br><br>";
									}
									echo "<h5><b>Principio(s) activo(s)</b></h5><br>";
									$i = 1;
										echo "<table border='1' style='border:green 3px ridge;'>";
											echo "<thead>";
												echo "<tr>
													<th width='500px'>Nombre</th>
													<th width='250px'>Miligramos</th></tr>";
											echo "</thead>";
											echo "<tbody>";
									foreach($principio->result() as $fila2)
									{
											echo "<tr>";
											echo "<td>".$fila2->nombre."</td>";
											echo "<td>".$fila2->cant_miligramos."</td>";
											echo "</tr>";
										$i++;
									}
									echo "</tbody>";
									echo "</table>";
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
