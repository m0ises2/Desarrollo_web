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
						$titulo = "Nuevo Usuario";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<legend>Nuevo Usuario:</legend>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns" align="center">
								<form method="POST" action = "<?php echo site_url();?>Agregar_usuario">
									<div class="panel" style="width:300px" align="left">
										<?php
											if( isset($error) )
											{
												echo '<div data-alert class="alert-box warning radius" style="width:250px; margin: 0 auto 20px auto;">Usuario no registrado o contraseña inválida.</div>';
											}
										?>	
										<label>Usuario</label>
										<input type="text" name="username" required />
										<label>Contraseña</label>
										<input type="password" name="password" required />
										<br>
										<div align="center">
											<input type="submit" style="background-color:#12853A" class="round button" value="Entrar" />
										</div>
								</div>
							</form>
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
