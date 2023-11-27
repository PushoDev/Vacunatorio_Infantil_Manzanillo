<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Project</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FavIcon -->    
    <link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo base_url('css/login.css'); ?>">
    <!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="<?php echo base_url('css/sweetalert2.min.css') ?>">
	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="<?php echo base_url('js/sweetalert2.min.js')?>" ></script>

</head>
<body>
    <!-- Alerta del Login -->
    <?php
    // Obtén el mensaje de la sesión si existe
    $mensaje = session('mensaje');
    // Verifica si hay un mensaje para mostrar
    if ($mensaje !== null) {
        // Define las variables para personalizar la alerta
        $titulo = ($mensaje === '0' ? 'Atención!' : '¡Éxito!');
        $texto = ($mensaje === '0' ? 'Credenciales Incorrectas :(' : 'Sus operaciones han sido guardadas Satisfactoriamente :)');
        $icono = ($mensaje === '0' ? 'question' : 'success');

        // Muestra el script de SweetAlert2 para mostrar la alerta
        echo '<script>';
        echo 'Swal.fire({';
            echo '  title: "' . $titulo . '",';
            echo '  text: "' . $texto . '",';
            echo '  icon: "' . $icono . '",';
            echo '  confirmButtonText: "Aceptar"';
            echo '});';
            echo '</script>';
        }
    ?>
  
    <!-- Login de entrada -->
    <div class="login-card">
        <h2>Login</h2>
        <h3>Ingrese sus credenciales</h3>

        <!-- Formulario -->
        <form class="login-form" action="<?php echo base_url('/login')?>" method="post">

            <input type="text" name="usuario" placeholder="Nombre de Usuario">
            <input type="password" name="password" placeholder="Contraseña">

            <a href="#">Olvidó su contraseña?</a>
            
            <br>

            <button type="submit">ACCEDER</button>

            <p>© 2023 | Mzllo - Cuba</p>

        </form>
    </div>
    
    <!-- Scripts del LOGIN -->
    <script src="<?php echo base_url('js/slogin.js')?>"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="<?php echo base_url('js/sweetalert2.min.js')?>" ></script>
    


</body>
</html>
