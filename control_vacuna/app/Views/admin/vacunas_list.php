<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lista de Vacunas</title>

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
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE VACUNAS
                </h3>
                <p class="text-justify">
                    Listado de las vacunas, las cuales pertenecen al esquema de vacunación desde 2021.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="<?php echo base_url('/vacunas_new'); ?>"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR VACUNA</a>
                    </li>
                    <li>
                        <a class="active" href="<?php echo base_url('/vacunas_list'); ?>"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE VACUNAS</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/vacunas_search'); ?>"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR VACUNA</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->						
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>#</th>
								<th>NOMBRE</th>
								<th>DOSIS/ml</th>
								<th>RESUMEN</th>
								<th>MUESTRA</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($esqvac as $key): ?>

							<tr class="text-center" >
								<td><?php echo $key-> id_vac ?></td>
								<td><?php echo $key-> vacuna ?></td>
								<td><?php echo $key-> dosis_ml ?></td>
								<td><?php echo $key-> resumen ?></td>
								<td>
									<?php if ($key->imagen_vac) : ?>
										<img src="<?= base_url('public/database/uploads/' . $key->imagen_vac) ?>" alt="Miniatura de la imagen" width="100">
										<?php else : ?>
											Sin imagen
										<?php endif; ?>
									</td>

								<td>
									<!-- Editar -->
                                    <a href="<?php echo base_url('/vacunas_update/'.$key -> id_vac); ?>" class="btn btn-success">
                                        <i class="fas fa-sync-alt"></i> 
                                    </a>
                                </td>
                                <td>
									<!-- Eliminar -->
									<a href="<?php echo base_url('/vacunas_delete/'.$key -> id_vac); ?>" class="btn btn-warning">
									<i class="far fa-trash-alt"></i>
									</a>
                                    
                                </td>
							</tr>							

							<?php endforeach; ?>						
							
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
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