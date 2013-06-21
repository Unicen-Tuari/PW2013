<!DOCTYPE html>
<html>
	<head>
		<title>TT Taller de Reparacion</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<meta charset="UTF-8">
		<script src="js/jquery-1.10.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
		<link rel="stylesheet" href="styles/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
	</head>
	<body>	
		<nav>
			<a href="index.html" class="menu" accesskey="h">Inicio</a>
			<a href="servicios.html" class="menu" accesskey="s">Servicios</a>
			<a href="consulta.php" class="elemento_actual menu" accesskey="r">Consulta Reparacion</a>
			<a href="contacto.html" class="menu" accesskey="c">Contacto</a>
			<a href="login.html" class="flota_der menu" accesskey="l">Login</a>
		</nav>
		<header>
			<img class="logo_izq flota_izq" src="images/linux.png" alt="Logo Windows">
			<img class="logo_der flota_der" src="images/win.png" alt="Logo Linux">
			<div class="logo">
				<p class ="logo">Logo</p>
				<p class="logo">Banner</p>
			</div>
		</header>
		<div class="clear"></div>
		<div class="elemento_contenedor" id="datos_consulta">
			<form class="datoscliente" method="post" action="consulta.php">
				<fieldset>
					<legend>Datos personales</legend>
					<input class="botonesform flota_izq" type="reset" value="BORRAR">
					<input class="formconsulta" type="text" name="dni" placeholder="DNI" pattern="[\d]{7,8}" title="Formato: 7 a 8 Digitos" required autofocus>
					<input class="botonesform flota_der" type="submit" value="ACEPTAR">
				</fieldset>
				<br>
				
			</form>
			<form class="datos_consultados">
				<fieldset>
					<legend>Datos reparación</legend>
					<br>
					<?php
						include ('rellena_consulta.php');
					?>
					<ul>
						<li><a class="fancybox" rel="g1" href="images/fotos/1.jpg"><img class="redonda" src="images/thumbnails/t_1.jpg" alt="paisaje"></a></li>
						<li><a class="fancybox" rel="g1" href="images/fotos/2.jpg"><img class="redonda" src="images/thumbnails/t_2.jpg" alt="paisaje 2"></a></li>
						<li><a class="fancybox" rel="g1" href="images/fotos/3.jpg"><img class="redonda" src="images/thumbnails/t_3.jpg" alt="paisaje 3"></a></li>
					</ul>			
				</fieldset>
			</form>
		</div>
		<footer class="clear">
			<div class="elemento_contenedor" id="footer">
				<ul>
					<li>Dirección</li>
					<li>Localidad</li>
					<li>Telefono</li>
					<li>Mail</li>
				</ul>
			</div>
			<div id="copyright">Copyright 2012-2013. Designed by Federico Bailes</div>
		</footer>
		<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				padding: 5,
    			nextEffect: 'fade',
    			prevEffect: 'fade',
    			openEffect: 'elastic',
    			closeEffect: 'elastic'
    		})
		});
		</script>
	</body>
</html>