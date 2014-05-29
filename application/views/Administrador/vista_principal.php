<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css"/>
		<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
		
		
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
					
					<!--INICIO DE LA TABLA-->
					
					<?php $this->load->library('encrypt'); ?>
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							
							<ul class="pagination" style="position:relative; left:10%;">
								<li class="arrow unavailable"><a href="">&laquo;</a></li>
								<li class="current"><a href="">1</a></li>
								<li><a href="" style="color:#12853A;">2</a></li>
								<li><a href="" style="color:#12853A;">3</a></li>
								<li><a href="" style="color:#12853A;">4</a></li>
								<li><a href="" style="color:#12853A;">5</a></li>
								<li class="arrow unavailable"><a href="">&raquo;</a></li>
							</ul>
							<br>
							
							<table>
								<thead>
									<tr>
										<th>Nombre </th>
										<th>Laboratorio </th>
										<th>Presentacion </th>
										<th>stock_min<br> </th>
										<th>stock_max<br> </th>
										<th>Cantidad Disponible</th>
										<th>Precio </th>
										<th>Dosis Disponible</th>
										<th>Operaciones</th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach ($medicamento->result() as $fila):
									?>
									<tr>
										<td><?php echo $fila->nombre; ?></td>
										<td><?php echo $fila->laboratorio; ?></td>
										<td><?php echo $fila->presentacion; ?></td>
										<td><?php echo $fila->stock_min; ?></td>
										<td><?php echo $fila->stock_max; ?></td>
										<?php echo ($fila->cantidad<$fila->stock_min ? "<td style='color:red;'><b>$fila->cantidad</b></td>\n" : "<td>$fila->cantidad</td>\n"); ?>
										<td><?php echo $fila->precio; ?></td>
										<td><?php echo ( isset($unidosis[$fila->codigo]) ? $unidosis[$fila->codigo] : "<b>N/A</b>" ); ?></td>
										<td>
											<nav class="top-bar" style="background-color:white;" data-topbar>
												<section class="top-bar-section">
													<ul>
														<li class="has-dropdown" style="background-color:white;">
															<a class="round button expand" style="color:white; background-color:#12853A;">
																Hacer...
															</a>
															<ul class="dropdown">
																<li><a href="<?php echo site_url()."lotes/nuevo_lote/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">	Nuevo lote </a></li>
																<li><a href="<?php echo site_url()."lotes/ver_lotes/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">Ver lotes</a></li>
																<li><a href="<?php echo site_url()."medicamento/ver_infor/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">Ver info</a></li>
																<li><a href="<?php echo site_url()."modificar/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">Modificar</a></li>
																<li><a href="<?php echo site_url()."medicamento/mostrar/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">Eliminar</a></li>
															</ul>
														</li>
													</ul>
												</section>
											</nav>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!--FIN DE LA TABLA-->
					
					<!--INICIO DEL FOOTER-->
					<br>
					<div class="row">
						<div class="large-12 columns">
							<ul class="pagination" style="position:relative; left:10%;">
								<li class="arrow unavailable"><a href="">&laquo;</a></li>
								<li class="current"><a href="">1</a></li>
								<li><a href="" style="color:#12853A;">2</a></li>
								<li><a href="" style="color:#12853A;">3</a></li>
								<li><a href="" style="color:#12853A;">4</a></li>
								<li><a href="" style="color:#12853A;">5</a></li>
								<li class="arrow unavailable"><a href="">&raquo;</a></li>
							</ul>
						</div>
						<a href = "<?php echo site_url();?>inicio_sesion/cerrar_sesion" style="color:#12853A;">Cerrar Sesión (<?php echo " ".$this->session->userdata('user_name')." ";?>)</a>
					</div>
					<!--FIN DEL FOOTER-->
				</div>
			</div>
		</div>
		<br>
		
		
		<?php #require("template/footer.php"); ?>
		<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/foundation.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/vendor/jquery.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/foundation/foundation.js"></script>
		<script src="<?php echo base_url(); ?>/assets/js/foundation/foundation.dropdown.js"></script>
		
		<script>$(document).foundation(
			{
				dropdown:{
					// specify the class used for active dropdowns
					active_class: 'open'
				}
			});
		</script>
	</body>
</html>
