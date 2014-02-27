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
		<?php
		if (isset($_GET['error'])) {
			if (($_GET['error'] == 33) OR ($_GET['error'] == 34) OR ($_GET['error'] == 35)){
				print("<div class='datbox-error'> Posteaste hace menos de 5 minutos, no puedes postear tan seguido. </div>");
			}else if ($_GET['error'] == 32) {
				print("<div class='datbox-error'> Comentaste hace menos de 5 minutos, no puedes comentar tan seguido. </div>");
			} else {
				print("<div class='datbox-error'> Ha habido un error </div>");}
		}
		?>
		
		<nav><!--Search box-->
			<table>
			<tr><a href='index.php?pagina=1&type=C&categoria=1'><button type="button" class="search-button-movie">PELICULAS</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=2'><button type="button" class="search-button-serie">SERIES</button></a></tr>
			<tr><a href='index.php?pagina=1&type=C&categoria=3'><button type="button" class="search-button-game">JUEGOS</button></a></tr>
			</table>
		</nav>

		<div class='datbox-aside'>	
			<div class='form-title'>Recordar contraseña</div>
			<form class='formulario' name='recordar' id='recordar' method='POST' action='recordarpsw.php'>
				Mail: <input type='text' name='email' id='email'/><br><?php if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'bad')){ print("<div class='error'>Datos incorrectos</div>");}
																						if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'ok')){ print("<div class='error'>Se ha enviado un mail a tu correo</div>");} ?>
				<button type='submit' class='boton-aside'>Enviar Datos</button>
			</form>
		</div>
	</body>
</div>
</html>