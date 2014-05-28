<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
		<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
	</head>

	<body>
		<br>
		<br>
		<?php echo form_open("modificar/modificado"); ?>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					<?php
						$titulo = "Modificar";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<div class="row">
						<div class="large-6 medium-9 small-centered columns" align="center">
							<fieldset style="border-color:#12853A;">
								<legend>Información</legend>
								<?php $fila = $medicamento->row();?>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns" align="left">
										<label>Nombre</label>
										<input type="text" name="nombre" value="<?php echo $fila->nombre; ?>" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
										<label>Laboratorio</label>
										<input type="text" name="laboratorio" value="<?php echo $fila->laboratorio; ?>" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
										<label>Presentación</label>
										<input type="text" name="presentacion" value="<?php echo $fila->presentacion; ?>" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
										<div class="row">
											<div class="large-4 medium-4 small-4 columns">
												<label>stock_min</label>
												<input type="text" name="stock_min" value="<?php echo $fila->stock_min; ?>" pattern="[0-9]+" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>stock_max</label>
												<input type="text" name="stock_max" value="<?php echo $fila->stock_max; ?>" pattern="[0-9]+" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>Precio (Bs. F)</label>
												<input type="text" name="precio" value="<?php echo $fila->precio; ?>" pattern="^[0-9]+\.?[0-9]*$" required />
											</div>
										</div>
										<input type="hidden" name="codigo" value="<?php echo $fila->codigo; ?>" />
										<br>
										<p><strong>Principio(s) activo(s)</strong></p>
										<br>
										<?php 
											foreach ($principio->result() as $fila):
										?>
										<div class="row">
											<div class="large-8 medium-8 small-8 columns">
												<label>nombre</label>
												<input type="hidden" name="principios_cod[]" value="<?php echo $fila->codigo; ?>" />
												<input type="text" name="principios_nom[]" value="<?php echo $fila->nombre; ?>" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
											</div>
											<div class="large-4 medium-4 small-4 columns">
												<label>masa (mg)</label>
												<input type="text" name="principios_masa[]" value="<?php echo $fila->cant_miligramos; ?>" pattern="^[0-9]+\.?[0-9]*$" required />
											</div>
										</div>
										<?php endforeach; ?>
										
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
					<br>
					<br>
					<!--FIN DEL CUERPO-->
					
					
				</div>
			</div>
		</div>
		</form>
		
		
		
		<?php #require("template/footer.php"); ?>
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
