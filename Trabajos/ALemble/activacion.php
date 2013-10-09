<!DOCTYPE html>
<html lang="es-Es">
<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

require_once('recaptcha/recaptchalib.php');
$captcha_publickey = "6LeGQeQSAAAAAGdM2uFeBv2LBaIDqUbC039TkD80";
$captcha_privatekey = "6LeGQeQSAAAAABxqzS1ngW9pxCjiJrpdSxOvnHri";
$error_captcha=null;

?>

<div id="contenido">
	
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" href="styles/broms-css.css">
	<script type="text/javascript" src="js/main.js" /></script>
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/user_control.js"></script>
	<noscript><meta http-equiv="Refresh"content="1;url=index_nojavascript.php" /></noscript>
	<link rel="shortcut icon" href="styles/images/icon2.ico">
	</head>
		<header>
		<a href='index.php?type=I&pagina=1'><image src="styles/images/header.gif"/></a>
		</header>
	<body>
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

		<?php
		if (isset($_GET['id'])){
			$id = $_GET['id'];
			print(" <div class='datbox-aside'>	
						<div class='form-title'>Login</div>
						<form class='formulario' name='login' id='login' method='POST' action='primerlogin.php'>
							<input type='hidden' name='codactivacion' id='codactivacion' value='$id'/>
							<input type='text' name='usernamelogin' id='usernamelogin' placeholder='Username'/><br>
							<input type='password' name='password' placeholder='Contraseña'/><br>");if ((isset($_GET['verif'])) AND ($_GET['verif'] == 'bad')){ print("<div class='error'>Login incorrecto</div>");} print("
							<button type='submit' class='boton-aside'>Ingresar</button>
						</form>
					</div> ");
		} else {
			print("<div class='datbox-registro'>	
						<div class='form-title'>Problema con la activacion, contacte al administrador.</div><br>
					</div>");
		}

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