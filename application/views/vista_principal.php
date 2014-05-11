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
												<div class="large-8 small-9 columns">
													<input type="text" placeholder="Inserte su texto" style="height:31px;">
												</div>
												<div class="large-4 small-3 columns">
													<a href="#" class="alert button expand" style="color:white;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left">
										<li class="divider" style="width:15px;"></li>
										<li class="has-dropdown">
											<a href="" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Busqueda avanzada</a></li>
												<li><label>Para los seleccionados</label></li>
												<li><a href="">Dar de baja</a></li>
												<li><a href="">Traspaso</a></li>
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
							<table>
								<thead>
									<tr>
										<th>check</th>
										<th>Nombre</th>
										<th>Laboratorio</th>
										<th>Presentacion</th>
										<th>stock_min</th>
										<th>stock_max</th>
										<th>Precio</th>
										<th>Operaciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Atamel</td>
										<td>Pficer</td>
										<td>tabletas</td>
										<td>10</td>
										<td>100</td>
										<td>6,5 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Brugesic</td>
										<td>Elmor</td>
										<td>tabletas</td>
										<td>24</td>
										<td>56</td>
										<td>20 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Lucentis</td>
										<td>Novatis</td>
										<td>solución inyectable</td>
										<td>5</td>
										<td>100</td>
										<td>200 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Cataflam</td>
										<td>Novatis</td>
										<td>tabletas</td>
										<td>20</td>
										<td>300</td>
										<td>200 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Ritalin</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>5</td>
										<td>100</td>
										<td>215 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Tasigna</td>
										<td>Novatis</td>
										<td>tabletas</td>
										<td>5</td>
										<td>50</td>
										<td>355 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Lamisil</td>
										<td>Novatis</td>
										<td>crema</td>
										<td>10</td>
										<td>100</td>
										<td>70 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Voltarén</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>20</td>
										<td>300</td>
										<td>50 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Femara</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>5</td>
										<td>80</td>
										<td>225 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Tegretol</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>5</td>
										<td>50</td>
										<td>150 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Aclasta</td>
										<td>Novatis</td>
										<td>solución inyectable</td>
										<td>5</td>
										<td>50</td>
										<td>299 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Elidel</td>
										<td>Novatis</td>
										<td>crema</td>
										<td>5</td>
										<td>100</td>
										<td>99 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Leponex</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>5</td>
										<td>30</td>
										<td>198 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Sintrom</td>
										<td>Novatis</td>
										<td>comprimidos</td>
										<td>10</td>
										<td>60</td>
										<td>109 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Xolair</td>
										<td>Novatis</td>
										<td>vacuna</td>
										<td>10</td>
										<td>100</td>
										<td>80 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Nexium</td>
										<td>AstraZeneca</td>
										<td>granulado</td>
										<td>5</td>
										<td>60</td>
										<td>79 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Provisacor</td>
										<td>AstraZeneca</td>
										<td>comprimidos</td>
										<td>10</td>
										<td>100</td>
										<td>100 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Zinforo</td>
										<td>AstraZeneca</td>
										<td>polvo</td>
										<td>5</td>
										<td>50</td>
										<td>198 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Accolate</td>
										<td>AstraZeneca</td>
										<td>tabletas</td>
										<td>5</td>
										<td>100</td>
										<td>399 Bs</td>
										<td>Ver lotes</td>
									</tr>
									<tr>
										<td><input id="checkbox1" name="checkbox1" type="checkbox" value=""></td>
										<td>Diprivan</td>
										<td>AstraZeneca</td>
										<td>solución inyectable</td>
										<td>10</td>
										<td>200</td>
										<td>348 Bs</td>
										<td>Ver lotes</td>
									</tr>
									
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
							
							<br>
							<br>
							<br>
							
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
													<a href="#" class="alert button expand" style="color:white;">Buscar</a>
												</div>
											</div>
										</li>
									</ul>
									
									<!-- Left Nav Section -->
									<ul class="left">
										<li class="divider" style="width:15px;"></li>
										<li class="has-dropdown">
											<a href="" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="">Busqueda avanzada</a></li>
												<li><label>Para los seleccionados</label></li>
												<li><a href="">Dar de baja</a></li>
												<li><a href="">Traspaso</a></li>
											</ul>
										</li>
									</ul>
								</section>
							</nav>
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
