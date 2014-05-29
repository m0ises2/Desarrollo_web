<div class="row">
						<div class="large-2 medium-2 small-2 columns" align="left">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" width="50%" height="50%">
						</div>
						<div class="large-8 medium-8 small-8 columns" align="center">
							<h2><?php echo $titulo; ?></h2>
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
										<li>
											<a href="<?php echo site_url();?>principal" class="round button expand" style="color:white; background-color:#12853A;">Home</a>											
										</li>
										<li class="has-dropdown" style="margin-left:15px">
											<a href="" class="round button expand" style="color:white; background-color:#12853A;">Opciones</a>
											<ul class="dropdown">
												<li><a href="<?php echo site_url();?>busq_avanzada/buscar">Búsqueda avanzada</a></li>
												<li><a href= "<?php echo site_url();?>medicamento/alta" >Nuevo medicamento</a></li>
												<li><a href="<?php echo site_url()?>traspaso">Traspaso</a></li>
												<li><a href="<?php echo site_url()?>agregar_usuario">Nuevo Usuario</a></li>
											</ul>											
										</li>
									</ul>	
								</section>
							</nav>
							
							<br>
							<br>
							<br>
							
						</div>
					</div>
