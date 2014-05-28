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
		<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/themes/smoothness/jquery-ui.css" />
		<script src="<?php echo base_url()?>assets/js/jquery/jquery-1.11.1.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery/jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>

		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
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

		<script type="text/javascript">
		var cantidad = 1;
		var limite = 5;
			function agregar_compuesto()
			{
				cantidad += 1;
				if( cantidad <= limite )
				{
					var newdiv = document.createElement('div');
					newdiv.innerHTML = "<label>Nombre</label>" + "<br><input type='text' name='principios[]'>";
					newdiv.className="large-8 medium-6  small-6  columns";
					document.getElementById('principio').appendChild(newdiv);

					var newdiv2 = document.createElement('div');
					newdiv2.className="large-4 medium-6 small-6 columns";
					newdiv2.innerHTML = "<label>masa(mg)</label>" + "<br><input type='text' name='principios[]'>"
					document.getElementById('principio').appendChild(newdiv2);
				}
			}
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
						$titulo = "Nuevo medicamento";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<div class="row">
						<form method="POST" action="<?php echo site_url()?>medicamento/agregar">
							<div class="large-8 medium-10 small-centered columns" align="center">
								<fieldset style="border-color:#12853A;">
									<legend>Información:</legend>
									<div class="row">
										<div class="large-12 medium-12 small-12 columns" align="left">
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<?php 
														if(!isset($error))	
														{
															echo "<label>Nombre:</label>";
														}else
														{
															echo "<label style='color:red;'>Nombre:</label>";
														}
													?>
													<input type="text" name="nom" pattern = "^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
												</div>
											</div>
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<label>Laboratorio:</label>
													<input type="text" name="lab" pattern = "^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
												</div>
											</div>
											<div class = "row">
												<div class = "large-6 medium-6 small-6 columns">
													<label>Presentación:</label>
													<input type="text" name="pres" pattern = "^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$" required />
												</div>
											</div>
											<div class="row">
												<div class="large-3 medium-3 small-3 columns">
													<label>stock_min:</label>
													<input type="text" name="smin" pattern = "[0-9]+" required />
												</div>
												<div class="large-3 medium-3 small-3 columns">
													<label>stock_max:</label>
													<input type="text" name="smax" pattern = "[0-9]+" required />
												</div>
												<div class="large-3 medium-3 small-3 columns">
													<label>Precio (Bs. F):</label>
													<input type="text" name="precio" pattern = "^[0-9]+\.?[0-9]*$" required />
												</div>
												<div class="large-3 medium-3 small-3 columns">
													<label><span data-tooltip class="radius round" title="Cantidad de medicamento por caja.">Dosis:</span></label>
													<input type="text" name="dosis" pattern = "[0-9]+" required />
												</div>
											</div>
											<br>
											<br>
											<p><strong>Principio(s) activo(s):</strong></p>
											<div id="principio" class="row">
												<div id ="n" class="large-8 medium-6 small-6  columns">
													<label>Nombre</label>
													<input type="text" name="principios[]" pattern = "^[aA-zZ]+\s?[aA-zZ]*$+\s?[aA-zZ]*$"/>
												</div>
												<div id="m" class="large-4 medium-6 small-6 columns">
													<label>Masa (mg)</label>
													<input type="text" name="principios[]" pattern = "^[0-9]+\.?[0-9]*$"/>
												</div>
											</div>
											<div class = "row">
												<div class="large-4 medium-4 small-4 columns" align: "left">
													<input type="button" class="round tiny button" style="color:white; background-color:#12853A;" value="otro" onClick="agregar_compuesto()">										
												</div>
											</div>
											<br>
											<br>
											<p><strong>Información para el lote:</strong></p>
											<div class="row">
												<div class="large-2 medium-2 small-3 columns">
													<label>Lote:</label>
													<input type="text" name="lote" pattern = "[0-9]+" required />
												</div>
												<div class="large-2 medium-2 small-3 columns">
													<label>Cantidad:</label>
													<input type="text" name="cant" pattern = "[0-9]+" value = "1" required />
												</div>
												<div class="large-4 medium-4 small-3 columns">
													<label>Elaboración:</label>
													<input type="text" id="datepicker1" name="fecha_e" required placeholder='Mes/Dia/Año' readonly="readonly" />
												</div>
												<div class="large-4 medium-4 small-3 columns">
													<label>Vencimiento:</label>
													<input type="text" id="datepicker2" name="fecha_v" required placeholder='Mes/Dia/Año' readonly="readonly" />
												</div>
											</div>
											
										</div>
									</div>
								</fieldset>
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
