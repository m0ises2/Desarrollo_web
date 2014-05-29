<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/foundation.css" />
		
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					<?php
						$titulo = "Registro de Usuario";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<br><br>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns" align="center">
								
										<h4><b>Usuario:<?php echo " ".$name." </h4>";?></b>
										<br><h4><b>Registro Exitoso</b></h4>
										<div align="center"><br><br><br><br>
											<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Volver</a>
										</div>
								
						</div>
					</div>	
					<br><br><br>				
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
