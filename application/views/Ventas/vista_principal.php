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
		<br>
		<br>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns" align="center">
				
				<div class="callout panel" style="border-color:#12853A">
					<!--INICIO DEL HEADER-->
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Stock de productos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo site_url().'/';?>assets/img/logo.png" width="50%" height="50%">
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
												<div class="large-7 small-9 columns">
													<input type="text" placeholder="Inserte su texto" style="height:31px;">
												</div>
												<div class="large-5 small-3 columns">
													<a href="#" class="button radius round" style="color:white; background-color:#12853A;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left" style="margin-left:15px">
										<li class="has-dropdown">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Ver lotes</a></li>
												<li><a href="traspaso">Traspaso</a></li>
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
										<th width="10%" colspan="2">Operaciones</th>
									</tr>
								</thead>
								<tbody>

									<?php
										foreach ($medicamento->result() as $fila) {
											echo "<form method='POST' action=";
											echo site_url().'/index.php/medicamento/mostrar';
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
														<div style='line-height:550%;'>
															<input name = 'codigo' type='hidden' value=".$fila->codigo.">
															<button style='background-color:#12853A' type='summit' class='button tiny' tittle='Eliminar'>
																Eliminar
															</button>
														</div>
													</td>
													<td>  </td>
												</tr>";
											echo "</form>";
										}
									?>
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
							
							<a href = "<?php echo site_url().'/';?>index.php/inicio_sesion/cerrar_sesion" style="color:#12853A;">Cerrar Sesión</a>
					
						</div>
					</div>
					<!--FIN DEL FOOTER-->
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
