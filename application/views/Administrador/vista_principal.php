<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta name="description" content="Proyecto de Desarrollo Web">
		<meta name="author" content="Moises Alvarado, Nestor Rojas">
		<meta name="country" content="Venezuela">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Proyecto de Desarrollo Web</title>
		<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/css/foundation.css"/>
		<script src="js/modernizr.js"></script>
		<?php #require("template/header.php"); ?>
		
	</head>

	<body>
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo site_url(); ?>/assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Stock de productos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url(); ?>/assets/img/logo.png" width="50%" height="50%">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<nav class="top-bar" data-topbar>
								<section class="top-bar-section">
									<!-- Right Nav Section -->
									<ul class="right">
										<li class="has-form">
											<div class="row collapse">
												<div class="large-8 small-9 columns">
													<input type="text" placeholder="Inserte su texto" style="height:31px;">
												</div>
												<div class="large-4 small-3 columns">
													<a href="#" class="round alert button expand" style="color:white; background-color:#12853A;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left" style="margin-left:15px">
										<li class="has-dropdown">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Búsqueda avanzada</a></li>
												<li><a href= "<?php echo site_url();?>medicamento/alta" >Nuevo medicamento</a></li>
												<li><a href="<?php echo site_url()?>traspaso">Traspaso</a></li>
											</ul>											
										</li>
									</ul>	
								</section>
							</nav>
							
							<br>
							<br>
							<br>
							
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
					</div>
					<br>
					<!--FIN DEL HEADER-->
					
					<!--INICIO DE LA TABLA-->
					<?php $this->load->library('encrypt'); ?>
					<div class="row">
						<div class="large-12 medium-12 small-12 columns" align="center">
							<table>
								<thead>
									<tr>
										<th>Nombre <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
										<th>Laboratorio <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
										<th>Presentacion <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
										<th>stock_min<br> </th>
										<th>stock_max<br> </th>
										<th>Cantidad <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
										<th>Precio <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
										<th>Dosis <a href="y" style="color:#12853A;"></a> <a href="x" style="color:#12853A;"></a></th>
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
										<td><?php echo $fila->dosis; ?></td>
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
																<li><a href="">Ver lotes</a></li>
																<li><a href="<?php echo site_url()."medicamento/ver_infor/?id=".urlencode($this->encrypt->encode($fila->codigo));?>">Ver info</a></li>
																<li><a href="">Modificar</a></li>
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
						<a href = "<?php echo site_url();?>inicio_sesion/cerrar_sesion" style="color:#12853A;">Cerrar Sesión</a>
					</div>
					<!--FIN DEL FOOTER-->
				</div>
			</div>
		</div>
		<br>
		
		
		<?php #require("template/footer.php"); ?>
		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation/foundation.js"></script>
		<script src="js/foundation/foundation.dropdown.js"></script>
		
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
