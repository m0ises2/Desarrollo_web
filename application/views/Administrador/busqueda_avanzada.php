<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/foundation.css" />
		<script src="<?php echo base_url(); ?>/assets/js/modernizr.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/themes/smoothness/jquery-ui.css" />
		<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.1.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>
		
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
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					<?php
						$titulo = "Búsqueda avanzada";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<?php echo form_open('busq_avanzada/item'); ?>
					<div class="row">
						<div class="large-8 medium-10 small-centered columns" align="center">
							<fieldset style="border-color:#12853A;">
								<legend>Datos</legend>
								<div class="row">
									<div class="large-3 medium-3 small-6 columns">
										<label>Nombre</label>
										<input type="text" name="medicamento.nombre" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Laboratorio</label>
										<input type="text" name="laboratorio" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Presentación</label>
										<input type="text" name="presentacion" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Precio</label>
										<input type="text" name="precio" pattern="[0-9]+(.)?[0-9]*" />
									</div>
								</div>
								<div class="row">
									<div class="large-3 medium-3 small-6 columns">
										<label>Cantidad</label>
										<input type="text" name="medicamento.cantidad" pattern="[0-9]+" />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Princ. activo</label>
										<input type="text" name="principio.nombre" pattern="^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Fecha de elav.</label>
										<input type="text" id="datepicker1" name="principal.fecha_f"readonly="readonly"  />
									</div>
									<div class="large-3 medium-3 small-6 columns">
										<label>Fecha de ven.</label>
										<input type="text" id="datepicker2" name="principal.fecha_v" readonly="readonly" />
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
							<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Buscar">
						</div>
					</div>
					<br>
					<br>
					</form>
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
