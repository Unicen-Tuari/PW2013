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
			<?php if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'ok')){ 
						print("<div class='error'>Cambio realizado, se ha enviado un mail a tu correo</div>");
					}else{ print("			 
			<div class='form-title'>Cambio de contraseña</div>
			<form class='formulario' name='cambiar' id='cambiar' method='POST' action='cambiarpsw.php'><center>
				<table>
				<tr>
				<td>Username:</td>
				<td><input type='text' name='username' id='username' /></td>
				</tr>
				<tr>
				<td>Contraseña actual:</td>
				<td><input type='password' name='contraseña' id='contraseña' /></td>
				</tr>
				<tr>
				<td>Nueva contraseña:</td>
				<td><input type='password' name='nueva-contraseña' id='nueva-contraseña' /></td>
				</tr>
				<tr>
				<td>Confirmar nueva contraseña:</td>
				<td><input type='password' name='confirmar-contraseña' id='confirmar-contraseña' /></td>
				</tr>
				<tr>
				<td>Mail:</td>
				<td><input type='text' name='email' id='email' /></td>
				</tr>
				</table>");
				 if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'bad')){ 
					print("<div class='error'>Datos incorrectos</div>");}
				print("<button type='submit' class='boton-aside'>Cambiar contraseña</button> 
			</center></form>");}?>
		</div>
		
	</body>
</div>
</html>