<?php 
$id_infante = $datos[0]['id_infante'];
$nombre = $datos[0]['nombre'];
$edad = $datos[0]['edad'];
$c_identidad = $datos[0]['c_identidad'];
$cmf = $datos[0]['cmf'];
$dir_particular = $datos[0]['dir_particular'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Actualizar Niño</title>

	<!-- Fav.Icon -->
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
	<!-- Estilos personalizados -->
	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-material-design.min.css') ?>">
	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="<?php echo base_url('css/all.css') ?>">
	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="<?php echo base_url('css/sweetalert2.min.css') ?>">
	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="<?php echo base_url('js/sweetalert2.min.js')?>" ></script>
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.css') ?>">	
	<!-- General Styles -->
	<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="<?php echo base_url('/assets/avatar/Avatar.png') ?>" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						PuSho.Dev <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="<?php echo base_url('/admin');?>"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Resumen Gral</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Infantiles <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="<?php echo base_url('/infantil_new') ?>"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Niño</a>
								</li>
								<li>
									<a href="<?php echo base_url('/infantil_list') ?>"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Niños</a>
								</li>
								<li>
									<a href="<?php echo base_url('/infantil_search') ?>"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Niño</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Vacunas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="<?php echo base_url('/vacunas_new'); ?>"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Vacuna</a>
								</li>
								<li>
									<a href="<?php echo base_url('/vacunas_list'); ?>"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Vacunas</a>
								</li>
								<li>
									<a href="<?php echo base_url('/vacunas_search'); ?>"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Vacuna</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Préstamos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo préstamo</a>
								</li>
								<li>
									<a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de préstamos</a>
								</li>
								<li>
									<a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar préstamos</a>
								</li>
								<li>
									<a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Préstamos pendientes</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="user-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
								</li>
								<li>
									<a href="user-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
								</li>
								<li>
									<a href="user-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?php echo base_url('entidad'); ?>"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Entidad</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR NIÑO
				</h3>
				<p class="text-justify">
					Actualizar los datos del menor en caso de cambio de Dirección o alguna otra causa
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR NIÑO</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE NIÑOS</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR NIÑO</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<!-- Formulario Infantil para agregar a la Bdatos -->
				<form action="<?php echo base_url('/infantil_update/'.$id_infante) ?>" method="post" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Información básica de: <?php echo $nombre ?></legend>
						<div class="container-fluid">
							<div class="row">
								<!-- Este es el ID del Infante registrado -->
								<input type="hidden" name="id_infante" value="<?php echo $id_infante ?>">

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="c_identidad" class="bmd-label-floating">Carnet de Identidad</label>
										<input type="text" value="<?php echo $c_identidad ?>" class="form-control" name="c_identidad" id="c_identidad" maxlength="11">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="nombre" class="bmd-label-floating">Nombre y Apellidos</label>
										<input type="text" value="<?php echo $nombre ?>" class="form-control" name="nombre" id="nombre" maxlength="40">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="edad" class="bmd-label-floating">Edad</label>
										<input type="text" value="<?php echo $edad ?>" class="form-control" name="edad" id="edad" maxlength="40">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cmf" class="bmd-label-floating">CMF_Consultorio Médico de la Familia</label>
										<input type="text" value="<?php echo $cmf ?>" class="form-control" name="cmf" id="cmf" maxlength="3">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="dir_particular" class="bmd-label-floating">Dirección de Residencia</label>
										<input type="text" value="<?php echo $dir_particular ?>" class="form-control" name="dir_particular" id="dir_particular" maxlength="150">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>	

		</section>
	</main>
	
	
	<!--=============================================
	=          Archivos JavaScripts Proj            =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="<?php echo base_url('js/jquery-3.4.1.min.js') ?>" ></script>
	<!-- popper -->
	<script src="<?php echo base_url('js/popper.min.js') ?>" ></script>
	<!-- Bootstrap V4.3 -->
	<script src="<?php echo base_url('js/bootstrap.min.js') ?>" ></script>
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="<?php echo base_url('js/jquery.mCustomScrollbar.concat.min.js') ?>" ></script>
	<!-- Bootstrap Material Design V4.0 -->
	<script src="<?php echo base_url('js/bootstrap-material-design.min.js') ?>" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="<?php echo base_url('js/main.js') ?>" ></script>
</body>
</html>