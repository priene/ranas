<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Ranas Rojas - <?php echo $titulo; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Ranas Rojas">
<meta name="keywords" content="Ranas Rojas">
<link href="<?php echo base_url("assets/img/favicon.ico") ?>" rel="icon" type="image/x-icon" />
<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/animate.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/normalize.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/jquery-ui.css") ?>" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url("assets/css/animsition.min.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/standalone.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/jquery-clockpicker.min.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/estilos.css") ?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/fancybox.css") ?>" rel="stylesheet" media="screen">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body class="animsition">

		    <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
	        
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <!--<a href="#" class="navbar-brand"><img src="<?php echo base_url("assets/img/logo.png") ?>" alt="Ranas Rojas"></a>-->
	            <!--<li class="wow slideInUp" data-wow-delay="1.25s"><?php echo anchor('/servicios', 'Servicios', 'class="navico proximasIco"', 'title="Servicios"'); ?></li>-->
	        </div>
	        
	        <div id="navbarCollapse" class="collapse navbar-collapse wow slideInUp" data-wow-delay="0.1s" class="collapse navbar-collapse" aria-expanded="false" style="height: 1px;">
	            <ul class="nav navbar-nav">
	                <li class="wow slideInUp" data-wow-delay="1.5s"><?php echo anchor('/inicio', 'Inicio', 'class="navico proximasIco"', 'title="Inicio"'); ?></li>
					<li class="wow slideInUp" data-wow-delay="1.25s"><?php echo anchor('/nosotros', 'Nosotros', 'class="navico proximasIco"', 'title="Nosotros"'); ?></li>
					<li class="wow slideInUp" data-wow-delay="1s"><?php echo anchor('/calendario', 'Calendario', 'class="navico proximasIco"', 'title="Calendario"'); ?></li>
					<li class="wow slideInUp" data-wow-delay="1.25s"><?php echo anchor('/bandas', 'Bandas', 'class="navico bandasIco"', 'title="Bandas"'); ?></li>
					<li class="wow slideInUp" data-wow-delay="1.25s"><?php echo anchor('/registrobanda', 'Registro', 'class="navico bandasIco"', 'title="Registrá tu banda"'); ?></li>
					<li class="wow slideInUp" data-wow-delay="1.5s"><?php echo anchor('/contacto', 'Contacto', 'class="navico proximasIco"', 'title="Contacto"'); ?></li>
	            </ul>
	        </div>
	    </nav>

	<div class="contenedor users menulogin">

	<div class="navuser col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInDown" data-wow-delay="0.5s"	>
		<div id="navbarCollapse" class="collapse navbar-collapse" class="collapse navbar-collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="wow slideInDown" data-wow-delay="1s"><?php echo anchor('/menulogin', 'Dashboard', 'class="navico proximasIco"', 'title="Dashboard"'); ?></li>
				<li class="wow slideInDown" data-wow-delay="0.75s"><?php echo anchor('/ingresar_fecha', 'Fechas', 'class="navico proximasIco"', 'title="Ingresar Fecha"'); ?></li>
				<li class="wow slideInDown" data-wow-delay="0.5s"><?php echo anchor('/ingresar_banda', 'Bandas', 'class="navico proximasIco"', 'title="Ingresar Banda"'); ?></li>
				<li class="wow slideInDown" data-wow-delay="0.5s"><?php echo anchor('/ingresar_lugar', 'Lugares', 'class="navico bandasIco"', 'title="Ingresar Lugar"'); ?></li>
				<li class="wow slideInDown" data-wow-delay="0.75s"><?php echo anchor('/ingresar_genero', 'Generos', 'class="navico proximasIco"', 'title="Ingresar Genero"'); ?></li>
				<li class="wow slideInDown" data-wow-delay="1s"><?php echo anchor('/logout', 'Log-out', 'class="navico proximasIco"', 'title="Cerrar Sesion"'); ?></li>
            </ul>
        </div>
	</div>


