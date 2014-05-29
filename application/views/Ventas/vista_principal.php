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
					
					<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2>Stock de productos</h2>
						</div>
						<div class="large-2 medium-2 small-2 columns" align="right">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
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
												<li><a href="#">---</a></li>
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
										<th width="20%">Stock Minimo</th>
										<th width="20%">Stock Máximo</th>
										<th width="20%">Precio</th>
										<th width="20%">Cantidad Disponible</th>
										<th width="20%">Cant. Dosis Disponibles</th>
										<th width="20%">Operaciones</th>
									</tr>
								</thead>
								<tbody>

									<?php
										foreach ($medicamento->result() as $fila) {
											echo "<form method='POST' action=";
											echo site_url().'medicamento/mostrar';
											echo ">";
											echo "<tr>
													<td>". $fila->nombre ."</td>
													<td>". $fila->laboratorio ."</td>
													<td>". $fila->presentacion ."</td>
													<td>". $fila->stock_min ."</td>
													<td>". $fila->stock_max ."</td>
													<td>". $fila->precio ."</td>";
															if($fila->cantidad <= $fila->stock_min)
															{
																echo "<td style='color:red'><b>".$fila->cantidad."</b></td>";
															}else
															{
																echo "<td>".$fila->cantidad."</td>";
															}
											echo "</td>";													

													if( isset($unidosis[$fila->codigo]) )
													{
														echo "<td>".$unidosis[$fila->codigo]."</td>";
													}else
													{
														echo "<td><b>N/A</b></td>";
													}

											echo "<td>
														<input name = 'codigo' type='hidden' value=".$fila->codigo.">
														<button style='background-color:#12853A' type='summit' class='button tiny' tittle='Eliminar'>
																Eliminar
															</button>
														
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
							
							<a href = "<?php echo site_url();?>inicio_sesion/cerrar_sesion" style="color:#12853A;">Cerrar Sesión (<?php echo " ".$this->session->userdata('user_name')." ";?>)</a>
					
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
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
