<!DOCTYPE html>
<html lang="es-Es">
<?php
error_reporting(0);
date_default_timezone_set('America/Argentina/Buenos_Aires');
?>
	
	<head>
	<link rel="shortcut icon" href="/styles/images/broms.ico"/>
	<title>Brom's Web</title>
	<meta name="keywords" content="Descargas directas, Torrents, Peliculas, Series, Juegos"/>
	<meta name="description" content="Web para compartir peliculas, series y juegos. Descargas directas y torrents."/>
	<meta name="author" content="Augusto Lemble"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="styles/broms-css.css"/>
	<noscript><meta http-equiv="Refresh"content="1;url=index_nojavascript.php" /></noscript>
	</head>

<div id="contenido">
	<body>
		<header>
		<a href='index.php?type=I&pagina=1'><image src="styles/images/header.gif"/></a>
		</header>	
		<nav><!--Search box-->
			<table>
			<tr><a href='index.php?pagina=1&type=C&categoria=1'><button type="button" class="search-button-movie">PELICULAS</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=2'><button type="button" class="search-button-serie">SERIES</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=3'><button type="button" class="search-button-game">JUEGOS</button></a></tr>
			</table>
		</nav>

		<?php
		print(" <div class='datbox-aside'>
					<image src='styles/images/creador.png' class='creador'/>
					<div class='texto-contacto'>	
					<div class='form-title'>Creador e Inspiracion</div>
					Esta web comenzo siendo en un trabajo mio para la facultad, despues de haber aprobado
					decidi agregarle un par de cosas para poder subirla online, registre el dominio y 
					consegui un host gratuito. El resultado fue no parar hasta que quedara 100% funcional.
					La historia del nombre es algo graciosa. Brom se llama el perro de un amigo del 
					cual estube viviendo en la casa por un año, y el sugirio ese mismo nombre, gracias
					chelo. Fue puesto en broma como para no gastar tiempo pensando uno, pero es un nombre 
					simpatico y simple que es la misma idea de la pagina siendo algo facil de manejar,util
					y sencillo.
					Me costo mucho trabajo hacer esto que en cierta forma es para ayudar a todas las 
					personas como yo que estan todo el tiempo buscando que es lo ultimo en juegos, 
					peliculas y series en internet.Espero que puedan disfrutarla tanto como yo.
					<br><br>
					<center>Augusto, Username(Blackjak).</center>
					</div>
				</div> ");
		?>
		
		<footer>
		<button type="button" id="goto-heaven" value="IR AL CIELO" onclick="scrollTo(0)">Ir al cielo</button><br>
		<div id="footer-text">		
		© Broms Web 2013
		</div>
		</footer>
	</body>
</div>
</html>