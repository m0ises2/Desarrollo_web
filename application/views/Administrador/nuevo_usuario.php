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
								<form method="POST" action = "<?php echo site_url();?>agregar_usuario/agregar">
									<div class="panel" style="width:300px" align="left">
										<?php
											if( isset($error) )
											{
												echo '<div data-alert class="alert-box warning radius" style="width:250px; margin: 0 auto 20px auto;">Usuario no disponible</div>';
											}
										?>	
										<label>Usuario</label>
										<input type="text" name="usuario" pattern="^[aA-zZ]*$+[0-9]*?[aA-zZ]*$" value='<?php if( isset($error) ){echo $user;}?>' required />
										<label>Contraseña</label>
										<input type="password" name="contrasena" required />
										<label>¿Administrador?</label>
										<input type="checkbox" name="privi"/>
										<br>
										<div align="center">
											<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Cancelar</a>
											<input type="submit" style="background-color:#12853A" class="round button" value="Registrar" />
										</div>
								</div>
							</form>
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
