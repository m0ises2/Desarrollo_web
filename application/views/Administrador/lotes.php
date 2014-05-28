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
						$titulo = "Stock de productos";
						require("template/header.php");
					?>
					<!--FIN DEL HEADER-->
					
					<?php $fila = $medicamento->row(); ?>
					
					<p><strong><?php echo "$fila->nombre - $fila->laboratorio - $fila->presentacion"; ?></strong></p>
					<br>
					<!--INICIO DE LA TABLA-->
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<table>
								<thead>
									<tr>
										<th>num_lote</th>
										<th>Cantidad</th>
										<th>Fecha_f</th>
										<th>Fecha_v</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($lotes->result() as $fila): ?>
									<tr>
										<td><?php echo $fila->num_lote; ?></td>
										<td><?php echo $fila->cantidad; ?></td>
										<td><?php echo $fila->fecha_f; ?></td>
										<?php echo ($fila->fecha_v<date("d-m-Y") ? "<td>$fila->fecha_v</td>":"<td style='color:red;'><b>$fila->fecha_v</b></td>"); ?>
										<!--td style="color:red;">01-02-2014</td-->
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!--FIN DE LA TABLA-->
					
					<!--INICIO DEL FOOTER-->
					<br>
					<br>
					<br>
					<div class="row">
						<div class="large-12 columns">
							<a href='<?php echo site_url()?>principal' style='color:#12853A;'>Volver</a>
						</div>
					</div>
					<!--FIN DEL FOOTER-->
				</div>
			</div>
		</div>
		<br>
		
		
		<?php #require("template/footer.php"); ?>
		<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
