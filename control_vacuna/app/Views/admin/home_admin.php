<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inventario | Admon</title>

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
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
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
					<i style="color: green;" class="fab fa-dashcube fa-fw"></i> &nbsp; RESUMEN GENERAL
				</h3>
				<p class="text-justify">
					Resumen General del control de vacunas y la población infantil tanto en vacunados como por falta para completar el esquema general de Vacunas.
				</p>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">

				<a href="<?php echo base_url('/infantil_list'); ?>" class="tile">
					<div class="tile-tittle">Niños</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p><?php echo $CantidadInfantil; ?> Registrados</p>
					</div>
				</a>

				<a href="<?php echo base_url('/vacunas_list'); ?>" class="tile">
					<div class="tile-tittle">Vacunas</div>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p><?php echo $CantidadVacunas ?> Registrados</p>
					</div>
				</a>

				<a href="reservation-list.html" class="tile">
					<div class="tile-tittle">Prestamos</div>
					<div class="tile-icon">
						<i class="fas fa-file-invoice-dollar fa-fw"></i>
						<p>10 Registrados</p>
					</div>
				</a>

				<a href="user-list.html" class="tile">
					<div class="tile-tittle">Usuarios</div>
					<div class="tile-icon">
						<i class="fas fa-user-secret fa-fw"></i>
						<p>50 Registrados</p>
					</div>
				</a>

				<a href="company.html" class="tile">
					<div class="tile-tittle">Entidad</div>
					<div class="tile-icon">
						<i class="fas fa-store-alt fa-fw"></i>
						<p>1 Registrada</p>
					</div>
				</a>
				
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