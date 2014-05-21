<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo site_url().'/';?>assets/css/foundation.css" />
		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
	</head>

	<body>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Traspaso de medicamentos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<!--FIN DEL HEADER-->
					<div class="large-12 medium-12 small-12 columns" align="left">
						<h4>Selecciona los medicamentos a traspasar:</h4>
					</div>
					<br>
					<br>
					<br>
					<!--INICIO DE LA TABLA-->
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<table align="center">
								<thead>
									<tr>
										<th width="20%">Nombre</th>
										<th width="20%">Laboratorio</th>
										<th width="20%">Presentación</th>
										<th width="20%">Stock minimo</th>
										<th width="20%">Stock máximo</th>
										<th width="20%">Precio</th>
										<th width="20%">Cantidad Disponible</th>
										<th width="20%">Seleccionar</th>
									</tr>
								</thead>
								<tbody>

									<?php
										foreach ($medicamento->result() as $fila) {
											echo "<form method='POST' action=";
											echo site_url().'/index.php/traspaso/operar';
											echo ">";
											echo "<tr>
													<td>". $fila->nombre ."</td>
													<td>". $fila->laboratorio ."</td>
													<td>". $fila->presentacion ."</td>
													<td>". $fila->stock_min ."</td>
													<td>". $fila->stock_max ."</td>
													<td>". $fila->precio ."</td>
													<td>". $fila->cantidad ."</td>
													<td>
														<div style='margin-left:35px;'>
															<input name = 'seleccionados[]' type='checkbox' value=".$fila->codigo.">
														</div>
													</td>													
												</tr>";
											}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="left">
							<h4>Información adicional:</h4>
						</div>
					</div>
						<?php
							if( isset($error) )
							{
								echo '<div data-alert class="alert-box warning radius" style="width:250px; margin: 0 auto 20px auto;">Unidad destino inválida.</div>';
							}
							if( isset($error2) )
							{
								echo '<div data-alert class="alert-box warning radius" style="width:250px; margin: 0 auto 20px auto;">Cantidad no disponible.</div>';
							}
						?>	
					
					<br>
						<div class="row">
							<div div class="small-8 small-centered medium-6 large-4 columns" align="left">
								<label>Cantidad a ceder para todos</label>
								<input type="text" pattern= "[0-9]+" name="cant1" value="1" required />
											
								<label>Unidad cedente</label>
									<select name="uc1" required />
										<option value="principal">Inventario Principal</option>
										<option value="unidosis">Inventario Unidosis</option>
									</select>
									<label>Unidad destino</label>
									<select name="ud1" required />
										<option value="unidosis">Inventario Unidosis</option>
										<option value="publico">Venta al Público</option>
									</select>
									<label>Observaciones</label>
									<textarea name="obs1" style="height:110px; resize:none;"></textarea>
							</div>
					</div>
					<!--FIN DE LA TABLA-->
					
				</div>
				<div class="row">
						<div class="large-12 columns">
							<?php 
								if( isset($error) )
								{
									echo "<a href='../principal' style='color:#12853A;''>Volver</a>";
								}else
								{
									echo "<a href='principal' style='color:#12853A;''>Volver</a>";
								}
								
							?>
							<input type="submit" class="round button" style="color:white; background-color:#12853A;" value="Procesar">
							<?php echo "</form>"; ?>
						</div>
					</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
		<?php #require("template/footer.php"); ?>
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
