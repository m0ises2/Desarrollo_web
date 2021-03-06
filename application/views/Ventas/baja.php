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
							$titulo = "Medicamento a dar de baja";
							require("template/header.php");
						else:
					?>
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Medicamento a dar de baja</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<?php endif;?>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DEL CUERPO-->
					<form method="POST" action='<?php echo site_url();?>medicamento/eliminar'>
						<div class="row">
							<div class="small-4 small-centered columns">
								<fieldset style="border-color:#12853A;">
									<legend><?php foreach ($medicamento->result() as $fila) {echo $fila->nombre;}?></legend>
									<div class="row" >
										<div class="large-12 medium-12 small-12 columns" align="left">
											<label>Laboratorio: <?php echo $fila->laboratorio;?></label>
											<label>Presentación: <?php echo $fila->presentacion;?></label>
											<label>Cantidad Disponible: <?php if($fila->cantidad < $fila->stock_min){echo "<span style=' color: red; font-size:16pt; font-weight:bold;'>".$fila->cantidad."</span>";}else{echo "<span style='font-size:16pt; font-weight:bold;'>".$fila->cantidad."</span>";}?></label>
											<label>Dosis Disponible: <?php if($dosis->num_rows() == 0){echo "<span style='font-size:16pt; font-weight:bold;'> 0 </span>";}else{foreach($dosis->result() as $f){echo "<span style='font-size:16pt; font-weight:bold;'>".$f->cantidad_dosis."</span>";}}?></label>
											<br>
											<?php
												if( isset($error) )
												{
													echo '<div data-alert class="alert-box warning radius" style="width:200px; margin: 10px auto 20px auto;">Cantidad no disponible.</div>';
												}
											?>
											<label>Cantidad</label>
											<?php
												echo "<input type='text' name='cant1' pattern = '[1-9]+[0-9]*' value='1' required />";											
											?>
											
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
												
												<?php foreach ($lote->result() as $Lote)
												{ 
													echo "<option value=" . $Lote->num_lote .">";
													echo $Lote->num_lote. "</option>";
												}?>

											</select>
											<input name = 'codigo' type='hidden' value="<?php echo $fila->codigo;?>">
										</div>
										<div class="large-12 medium-12 small-12 columns" align="left" >
											<span style="margin-right:10px;">Unidosis</span>
											<input name = 'unidosis' type='checkbox' value='1'>
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
								<a href='<?php echo site_url()?>principal' style='color:#12853A;'> Volver </a>
								<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Procesar">
							</div>
						</div>
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
