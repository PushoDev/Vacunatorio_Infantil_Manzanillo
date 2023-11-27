<?php 
$id_vac = $datos[0]['id_vac'];
$vacuna = $datos[0]['vacuna'];
$dos_1ra_dosis = $datos[0]['1ra_dosis'];
$dos_2da_dosis = $datos[0]['2da_dosis'];
$dos_3ra_dosis = $datos[0]['3ra_dosis'];
$reactivacion = $datos[0]['reactivacion'];
$dosis_ml = $datos[0]['dosis_ml'];
$via = $datos[0]['via'];
$region_aplicacion = $datos[0]['region_aplicacion'];
$lugar_aplicacion = $datos[0]['region_aplicacion'];
$imagen_vac = $datos[0]['imagen_vac'];
$imagen_url = isset($datos[0]['imagen_vac']) ? base_url('public/database/uploads/' . $datos[0]['imagen_vac']) : null;
$resumen = $datos[0]['resumen'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Actualizar Vacuna</title>

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
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR VACUNA
                </h3>
                <p class="text-justify">
                    Actualizar la vacuna, asi sabremos la cantidad y el nombre real para cuidar a nuestra Poblacion Infantil!
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="#"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR VACUNA</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE VACUNAS</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR VACUNA</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT / CONTENIDO -->
            <div class="container-fluid">
				<!-- Formulario -->
				<form action="<?php echo base_url('/vacunas_update/'.$id_vac) ?>" method="post" class="form-neon" enctype="multipart/form-data" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información de la nueva Vacuna: <?php echo $vacuna ?> </legend>
						<div class="container-fluid">
							<div class="row">
								<!-- Este es el Id de la Vacuna Seleccionada -->
								<input type="hidden" name="id_vac" value="<?php echo $id_vac ?>">

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="vacuna" class="bmd-label-floating">Nombre de la Vacuna</label>
										<input type="text" value="<?php echo $vacuna ?>"  class="form-control" name="vacuna" id="vacuna" maxlength="45">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="1ra_dosis" class="bmd-label-floating">1ra Dosis</label>
										<input type="text" value="<?php echo $dos_1ra_dosis ?>"  class="form-control" name="1ra_dosis" id="1ra_dosis" maxlength="9">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="2da_dosis" class="bmd-label-floating">2da Dosis</label>
										<input type="text" value="<?php echo $dos_2da_dosis ?>"  class="form-control" name="2da_dosis" id="2da_dosis" maxlength="9">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="3ra_dosis" class="bmd-label-floating">3ra Dosis</label>
										<input type="text" value="<?php echo $dos_3ra_dosis ?>" class="form-control"  name="3ra_dosis" id="3ra_dosis" maxlength="9">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="reactivacion" class="bmd-label-floating">Reactivación</label>
										<input type="text" value="<?php echo $reactivacion ?>" class="form-control" name="reactivacion" id="reactivacion" maxlength="9">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="dosis_ml" class="bmd-label-floating">Total Dosis ML</label>
										<input type="text" value="<?php echo $dosis_ml ?>" class="form-control" name="dosis_ml" id="dosis_ml" maxlength="9">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="via" class="bmd-label-floating">Vía de Administración</label>
										<input type="text" value="<?php echo $via ?>" class="form-control" name="via" id="via" maxlength="45">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="region_aplicacion" class="bmd-label-floating">Región Corporal</label>
										<input type="text" value="<?php echo $region_aplicacion ?>" class="form-control" name="region_aplicacion" id="region_aplicacion" maxlength="140">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="lugar_aplicacion" class="bmd-label-floating">Centro de Vacunación</label>
										<input type="text" value="<?php echo $lugar_aplicacion ?>" class="form-control" name="lugar_aplicacion" id="lugar_aplicacion" maxlength="140">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="resumen" class="bmd-label-floating">Resumen, acerca de esta</label>
										<input type="text" value="<?php echo $resumen ?>" class="form-control" name="resumen" id="resumen" maxlength="240">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="imagen_vac" class="bmd-label-floating">Imagen</label>
										<input type="file" value="<?php echo $imagen_vac ?>" class="form-control" name="imagen_vac" id="imagen_vac">
									</div>
								</div>
								<!-- Agregar este código para mostrar la imagen -->
								<?php if ($imagen_url) : ?>
									<div class="col-12 col-md-4">
										<img src="<?= $imagen_url ?>" alt="Imagen de la vacuna">
									</div>
								<?php endif; ?>

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