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
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<?php
						$this->load->model('usuario_model');
						if($this->usuario_model->obtener_privilegio( $this->session->userdata('user_id') ) == "administrador"):
							$titulo = "Traspaso de medicamentos";
							require("template/header.php");
						else:
					?>
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Traspaso de medicamentos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<?php endif;?>
					<!-- BARRA -->
					<br>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<?php
						echo "<form method='POST' action=";
						echo site_url().'/index.php/traspaso/traspasar';
						echo ">";
					?>
						<div class="row">
							
							<div class="small-8 small-centered medium-6 large-4 columns" align="center">
								<fieldset style="border-color:#12853A;">
									<legend>Traspaso</legend>
									<div class="row">
										<div class="large-12 medium-12 small-12 columns" align="left">
											<label>Cantidad a ceder para todos</label>
											<input type="text" pattern= "[0-9]+" name="cant1" value="1" required />
											
											<label>Unidad cedente</label>
											<select name="uc1" required />
												<option value="Inventario Principal">Inventario Principal</option>
												<option value="Inventario Unidosis">Inventario Unidosis</option>
											</select>
											<label>Unidad destino</label>
											<select name="ud1" required />
												<option value="Inventario Unidosis">Inventario Unidosis</option>
												<option value="Venta al Público">Venta al Público</option>
											</select>
											<label>Observaciones</label>
											<textarea name="obs1" style="height:110px; resize:none;"></textarea>
										</div>
									</div>
									<?php
									if( isset($error) )
									{
										echo '<div data-alert class="alert-box warning radius" style="width:250px; margin: 0 auto 20px auto;">Unidad cedente/destino invalida.</div>';
									}
								?>	
								</fieldset>
							</div>
						</div>

						<div class="row">
							<div>
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
					</form>
					<!--FIN DEL CUERPO-->
					
					
				</div>
			</div>
		</div>
		
		
		
		<?php #require("template/footer.php"); ?>
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
